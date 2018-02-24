<?Php
    class Signin_model extends CI_Model
    {
        public function create_credentials($user_id, $username, $password)
        {
            $data = array(
                'user_id'       => $user_id,
                'username'      => $username,
                'password'      => md5($password)
            );
            
            $this->db->insert('login', $data);
        }
        
        public function user_signin()
        {
            $username = $this->input->post("username");
            $password = md5($this->input->post("password"));
            
            $query = $this->data_access->signin_user($username, $password);
            
            if($query->num_rows() == 1)
            {
                $user_data = array(
                    'USER_ID'           => $query->row(0)->user_id,
                    'USER_ROLE'         => $query->row(0)->role_code,
                    'ROLE_NAME'         => $query->row(0)->role_name,
                    'USER_STATUS'       => $query->row(0)->status_code,
                    'FNAME'             => $query->row(0)->first_name,
                    'LNAME'             => $query->row(0)->last_name,
                    'HASH'              => $query->row(0)->hash,
                    'EMAIL'             => $query->row(0)->email_address,
                    'BRANCH_ID'         => $query->row(0)->branch_id
                );
                
                $this->session->set_userdata($user_data);
                
                return TRUE;
            }
            else
            {
                return FALSE;
            }
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