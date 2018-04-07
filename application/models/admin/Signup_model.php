<?Php
    class Signup_model extends CI_Model
    {
        public function signup_practioner()
        {
            $title              = $this->input->post("title");          
            $fname              = $this->input->post("fname");
            $lname              = $this->input->post("lname");
            $hpc_no             = $this->input->post("hpc_no");
            $practice_no        = $this->input->post('practice_no');
            $speciality_code    = $this->input->post('speciality');
            $username           = $this->input->post("username");
            $password           = $this->input->post("password");
            $confirm_passw      = $this->input->post("confirm_password");
            $contact_no         = $this->input->post('contact_no');
            $email              = $this->input->post('email_address');
            $confirm_email      = $this->input->post('confirm_email');
            $hash               = $this->create_hash($email);
            $t_and_c            = $this->input->post("terms");
            $expiry_date        = "2018-04-12";
            $is_new_account     = "Yes";
            /*$hpcsa_no           = $this->input->post('hpcsa_no');
            $speciality         = $this->input->post('practice_type');
            $branch_name        = $this->input->post("practice_name");
            $address_line       = $this->input->post("address_line");
            $city               = $this->input->post("city");
            $province           = $this->input->post("province");
            $location           = $this->input->post("location");
            $default_branch     = "YES";*/
            
            //pass email address and hash through a session
            $this->session->set_userdata("registration_email", $email);
            $this->session->set_userdata("HASH", $hash);
            
            //signup process
            $this->db->trans_start(); //BEGIN TRANSACTION
        
            //create user
            $this->practitioner_data($title, $fname, $lname);
            
            //get new user id
            $user_id = $this->get_new_added_id('user', 'user_id');
            
            //create account activation
            $this->create_activate_account($user_id, $expiry_date, $hash);
            
            //create manager
            $this->manager_model->create_manager($user_id, $is_new_account);
            
            //create practitioner
            $this->practitioner_model->create_practitioner($user_id, $hpc_no, $practice_no);
            
            //get new practitioner id
            $practitioner_id = $this->get_new_added_id('practitioner', 'practitioner_id');
            
            //create practitioner speciality
            $this->practitioner_model->create_practitioner_speciality($practitioner_id, $speciality_code);
            
            //create practitioner login details
            $this->signin_model->create_credentials($user_id, $username, $password);
            
            //create user role
            $this->user_model->create_user_role($user_id, 4);
            
            //create user status
            $this->user_model->create_user_status($user_id, 2);
            
            //create phone contact
            $this->communication_model->create_phone_contact($user_id, $contact_no);
            
            /*
            *retrieve new phone contact id that was generated when a user register. the following insert
            *statements depend on this new user id.
            */
            $phone_contact_id = $this->get_new_added_id('phone_contact', 'phone_contact_id');
            
            //create phone contact priority
            $this->communication_model->create_phone_contact_priority(1, $phone_contact_id);
            
            //create phone contact type
            $this->communication_model->create_phone_contact_type(1, $phone_contact_id);
            
            //create email contact
            $this->communication_model->create_email_contact($user_id, $email);
            
            /*
            *retrieve new email contact id that was generated when a user register. the following insert
            *statements depend on this new user id.
            */
            $email_contact_id = $this->get_new_added_id('email_contact', 'email_contact_id');
            
            //create email contact priority
            $this->communication_model->create_contact_email_priority(1, $email_contact_id);
            
            //create email contact type
            $this->communication_model->create_email_contact_type(1, $email_contact_id);
            
            
            /*//create branch
            $this->branch_model->create_branch($user_id, $branch_name, $address_line, $city, $province, $location);
            
            //get new branch id
            $branch_id = $this->signup_model->get_new_added_id('branch', 'branch_id');
            
            //assign branch to a user
            $this->branch_model->assign_user_branch($user_id, $branch_id);
            
            //get new user branch id
            $user_branch_id = $this->signup_model->get_new_added_id('user_branch', 'user_branch_id');
            
            //create default branch
            $this->branch_model->create_default_branch($user_branch_id, $default_branch);
            */
            //complete MySQL transaction
            $this->db->trans_complete(); //COMPLETE TRANSACTION
            
            //return transaction status
            return $this->db->trans_status();
        }
        
        public function practitioner_data($title, $fname, $lname)
        {
            //get practitioner personal details
            $user_data = array(
                'title'             => $title,
                'first_name'        => $fname,
                'last_name'         => $lname,
            );

            //insert user details into user table
            $this->db->insert('user', $user_data);
        }
        
        /*account activation
        *++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        */
        public function create_activate_account($user_id, $expiry_date, $hash)
        {
            $data = array(
                'user_id'           => $user_id,
                'expiry_date'       => $expiry_date,
                'hash'              => $hash
            );
            
            $this->db->insert("account_activation", $data);
        }
        
        //call this method to re-create activation link and sent to user 
        public function create_activation_link()
        {
            
        }
        
        //call this method if a user click a activation link from their mail client
        public function activate_account($hash)
        {
            $is_updated = false;
            
            //select user id from activation account
            $this->db->from("account_activation a");
            $this->db->join("user u", "a.user_id = u.user_id");
            $this->db->join("user_status s", "u.user_id = s.user_id");
            $this->db->where('hash', $hash);
            $this->db->where('is_expired', 'No');
            
            $data = $this->db->get()->result_array();
            
            //get user id
            if(count($data) > 0)
            {
                $user_status_id = $data[0]['user_status_id'];
                $status_code = 1;

                //update user status code
                if($this->user_model->update_user_status($user_status_id, $status_code))
                {
                    $is_updated = true;    
                }
            }
            
            return $is_updated;
        }
        
        public function create_hash($email)
        {
            $str = md5(rand(0, 1000) . $email);
            
            for ($i = 0, $c = strlen($str); $i <$c ; $i++)
            {
                $str[$i] = rand(0, 100) > 50 ? strtoupper($str[$i]) : $str[$i];
            }
            
            return $str;
        }
        
        /*
        *++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        */
        
        //get new generated id
        public function get_new_added_id($table, $column)
        {
            //select new user id
            $query = $this->db->query("SELECT " . $column . " FROM " . $table . " ORDER BY " . $column . " DESC LIMIT 0, 1");
            return $query->row(0)->$column;
        }
        
        //check if value exists
        public function is_val_exists($table, $field, $value)
        {
            $sql = "select count(*) as is_exists from $table where($field = '$value')";
            return $this->db->query($sql)->result_array();
        }
    }
?>