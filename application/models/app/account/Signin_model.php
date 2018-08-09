<?Php
    class Signin_model extends CI_Model
    {
        public function user_signin()
        {
            $username       = $this->input->post("username"); //$_POST['username'];
            $password       = md5($this->input->post("password")); //$_POST['password'];
            $is_signedin    = FALSE;
            $current_date   = date('Y-m-d');
            
            $login_query = $this->data_access->signin_user($username, $password);
            
            if($login_query->num_rows() == 1)
            {
                //get login id
                $login_id = $login_query->row(0)->login_id;
                
                //count login query
                $count_login_query  = $this->data_access->count_login_attempt($login_id, $current_date);
                
                //check if there is a login for current date
                if($count_login_query->row(0)->today_login == 0)
                {
                    $current_data   = date('Y-m-d');
                    $attempt_count  = 0;
                    
                    //create login attempt record and initials attempt to 0 and current date
                    $this->create_signin_attempt($login_id, $current_data, $attempt_count);
                }
                
                //check if the user has not exceeded maximum login attempts
                $login_attempts_query = $this->check_login_attempt($login_id, $current_date);

                //get login attempt count
                $attempt_count = $login_attempts_query->row(0)->attempt_count;

                //check if there is login for current date
                if($attempt_count < MAX_LOGIN)
                {
                    $login_attempt_id   = $login_attempts_query->row(0)->login_attempt_id;
                    $attempt_count      = 0;
                    
                    //reset login attempt to 0
                    $this->update_signin_attempt($login_attempt_id, $attempt_count);
                    
                    //set access type and action
                    $actions = array();
                    
                    //get user id
                    $user_id = $login_query->row(0)->user_id;
                    
                    //default branch query
                    $default_branch_query = $this->data_access->fetch_default_branch($user_id);
                    
                    if($default_branch_query->num_rows() == 1)
                    {
                        //call set_branch_data method from SessionData_model class
                        $this->sessiondata_model->set_branch_data($default_branch_query);
                    }
                    else
                    {
                        $actions["new_branch"] = true;
                    }

                    //set actions session
                    $this->session->set_userdata("actions", $actions);
                    
                    //call set_user_data method from SessionData_model class
                    $this->sessiondata_model->set_full_access_data($login_query);
                }
                else
                {
                    //notify the user that they reached maximum login attempt
                    $this->session->set_userdata("MAX_LOGIN_REACHED", TRUE);
                    
                    return FALSE;
                }
                
                return TRUE;
            }
            else
            {
                //get login id by user name
                $login_id_query = $this->get_login_id($username);
                
                if($login_id_query->num_rows() == 1)
                {
                    $login_id = $login_id_query->row(0)->login_id;
                    
                    //count login query
                    $count_login_query  = $this->data_access->count_login_attempt($login_id, $current_date);
                    
                    //check if there is a login for current date
                    if($count_login_query->row(0)->today_login == 0)
                    {
                        $current_date   = date('Y-m-d');
                        $attempt_count  = 0;

                        //create login attempt record and initials attempt to 0 and current date
                        $this->create_signin_attempt($login_id, $current_date, $attempt_count);
                    }
                    
                    //check if the user has not exceeded maximum login attempts
                    $login_attempts_query = $this->check_login_attempt($login_id, $current_date);

                    //get login attempt count
                    $attempt_count      = $login_attempts_query->row(0)->attempt_count;
                    $login_attempt_id   = $login_attempts_query->row(0)->login_attempt_id;
                    
                    if($attempt_count == MAX_LOGIN)
                    {
                        //notify the user that they reached maximum login attempt
                        $this->session->set_userdata("MAX_LOGIN_REACHED", TRUE);
                    }
                    else
                    {
                        $this->session->set_userdata("MAX_LOGIN_REACHED", FALSE);
                        
                        //accumulate number of failed attempts and update login attemptss table
                        ++$attempt_count;
                        $maximum_login          = MAX_LOGIN;
                        
                        $this->update_signin_attempt($login_attempt_id, $attempt_count);

                        //get remaining login attempts
                        $remaining_attempts     = ($maximum_login - $login_attempts_query->row(0)->attempt_count);
                        
                        //set remaining attempts session
                        $this->session->set_userdata('REMAINING_ATTEMPTS', $remaining_attempts);
                    }
                }
                
                return FALSE;
            }
        }
        
        public function create_credentials($user_id, $username, $password)
        {
            $data = array(
                'user_id'       => $user_id,
                'username'      => $username,
                'password'      => md5($password)
            );

            $this->db->insert('login', $data);
        }
        
        public function create_signin_attempt($login_id, $current_date, $attempt_count)
        {
            $data = array(
                'login_id'          => $login_id,
                'attempt_count'     => $attempt_count,
                'login_date'        => $current_date
            );
            
            $this->db->insert('login_attempt', $data);
        }
        
        public function check_login_attempt($login_id, $current_date)
        {
            $this->db->where('login_id', $login_id);
            $this->db->where('login_date', $current_date);
            
            return $this->db->get('login_attempt');
        }
        
        public function update_signin_attempt($login_attempt_id, $attempt_count)
        {
            $data = array(
                'attempt_count'     => $attempt_count
            );
            
            $this->db->where('login_attempt_id', $login_attempt_id);
            $this->db->update('login_attempt', $data);
        }
        
        //get login id by username
        public function get_login_id($username)
        {
            $this->db->where('username', $username);
            return $this->db->get("login");
        }
        
        public function forgot_password()
        {
            $email =  $this->input->post('email_address');
            $this->session->set_userdata("USER_EML", $email);
            
            $this->db->where('email_address', $email);
            $query = $this->db->get('email_contact');
            
            if($query->num_rows() == 1)
            {
                $this->session->set_userdata("PASSW_RET_EMAIL", $query->row(0)->email_address);
                $this->session->set_userdata("PASSW_RET_USRID", $query->row(0)->user_id);
                
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }
        
        public function update_password($password)
        {
            $data = array(
                'password' => md5($password)
            );
            
            $this->db->where('user_id', $this->session->userdata("PASSW_RET_USRID"));
            return $this->db->update('user', $data);
        }
    }
?>