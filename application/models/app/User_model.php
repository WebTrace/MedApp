<?Php
    class User_model extends CI_Model
    {
        public function create_user()
        {
            $fname                  = $this->input->post("fname");
            $lname                  = $this->input->post("lname");
            $branch_id              = $this->input->post("user_branch");
            $role_code              = $this->input->post("user_role");
            //$title                  = $this->input->post("title");
            //$id_number              = $this->input->post("id_number");
            $practice_no            = $this->input->post("practice_no");
            //$hpcsa_no               = $this->input->post("hpcsa_no");
            $speciality_code        = $this->input->post("speciality");
            //$contact_no             = $this->input->post("contact_no");
            $email_address          = $this->input->post("email");
            $username               = $this->input->post("username");
            $password               = md5(12345);
            $is_default             = "Yes";
            $hash                   = $this->signup_model->create_hash($email_address);
            //$expiry_date            = "2018-04-21";
            //$is_new_account         = "No";
            $is_manager             = "No";
            $user_account_type_id   = $this->session->userdata("USER_ACCOUNT_TYPE_ID");
            
            //begin trasaction for creating a new user
            $this->db->trans_start();
            
            //create user
            $this->user_data($fname, $lname);
            
            //get new user id
            $user_id = $this->signup_model->get_new_added_id('user', 'user_id');
            
            //create login details
            $this->signin_model->create_credentials($user_id, $username, $password);
            
            //create user role
            $this->create_user_role($user_id, $role_code);
            
            //create user status
            $this->create_user_status($user_id, 2);
            
            if($role_code == 3)
            {
                //create practitioner
                $this->practitioner_model->create_practitioner($user_id, $practice_no);
                
                $practitioner_id = $this->signup_model->get_new_added_id('practitioner', 'practitioner_id');
                
                //create practitioner speciality
                $this->practitioner_model->create_practitioner_speciality($practitioner_id, $speciality_code);
            }
            
            //create account activation
            //$this->signup_model->create_activate_account($user_id, $expiry_date, $hash);
            
            //assign branch to a user
            $this->branch_model->assign_user_branch($user_id, $branch_id);
            
            //account user group
            $this->account_model->user_account_group_data($user_account_type_id, $user_id, $is_manager);
            
            //create default branch
            $this->branch_model->default_branch_data($user_id, $branch_id, $is_default);
            
            //create phone contact
            //$this->communication_model->create_phone_contact($user_id, $contact_no);
            
            /*
            *retrieve new phone contact id that was generated when a user register. the following insert
            *statements depend on this new user id.
            */
            //$phone_contact_id = $this->signup_model->get_new_added_id('phone_contact', 'phone_contact_id');
            
            //phone contact priority
            //$this->communication_model->create_phone_contact_priority(1, $phone_contact_id);
            
            //create phone contact type
            //$this->communication_model->create_phone_contact_type(1, $phone_contact_id);
            
            //create  email contact
            $this->communication_model->create_email_contact($user_id, $email_address);
            
            //
            $email_contact_id = $this->signup_model->get_new_added_id('email_contact', 'email_contact_id');
            
            //create email contact type
            $this->communication_model->create_email_contact_type(1, $email_contact_id);
            
            //email contact priority
            $this->communication_model->create_contact_email_priority(1, $email_contact_id);
            
            //complete transaction
            $this->db->trans_complete();
            
            //return transaction status
            $this->db->trans_status();
        }
        
        public function update_user()
        {
            
        }
        
        public function fetch_user($user_id) //recieve manager id
        {
            return $this->data_access->fetch_user_across_branch($user_id);
        }
        
        public function remove_user()
        {
            
        }
        
        //get gender from id number
        public function get_gender($id_number)
        {
            $gender_code = substr($id_number, 6, 4);

            if ($gender_code  < 5000) {
                $gender = "Female";
            }
            else {
                $gender = "Male";
            }

            return $gender;
        }
        
        public function user_data($fname, $lname)
        {
            //get user details
            $user_data = array(
                'first_name'    => $fname,
                'last_name'     => $lname
            );

            //insert user details
            $this->db->insert('user', $user_data);
        }
        
        public function create_user_role($user_id, $role_code)
        {
            $user_role_data = array(
                'user_id'       => $user_id,
                'role_code'     => $role_code
            );
            
            //insert user role details
            $this->db->insert('user_role', $user_role_data);
        }
        
        public function fetch_user_role($user_id)
        {
            $this->db->from('user', 'u');
            $this->db->join('user_role ur', 'u.user_id = ur.user_id');
            $this->db->join('role r', 'r.role_code = ur.role_code');
            $this->db->where('u.user_id', $user_id);
            
            return $this->db->get()->result_array();
        }
        
        public function update_user_role($user_role_id, $role_code)
        {
            $data = array(
                'role_code'       => $role_code
            );
            
            $this->db->where('user_role_id', $user_role_id);
            $this->db->update('user_role', $data);
        }
        
        public function fetch_role()
        {
            $this->db->select("*");
            return $this->db->get("role")->result_array();
        }
        
        public function create_user_status($user_id, $status_code)
        {
            $user_status_data = array(
                'status_code'   => $status_code,
                'user_id'       => $user_id
            );
            
            //insert user role details
            $this->db->insert('user_status', $user_status_data);
        }
        
        public function fetch_user_status($user_id)
        {
            $this->db->from('user', 'u');
            $this->db->join('user_status us', 'u.user_id = us.user_id');
            $this->db->join('status s', 's.status_code = us.status_code');
            $this->db->where('uuser_id', $user_id);

            return $this->db->get()->result_array();
        }
        
        public function update_user_status($user_status_id, $status_code)
        {
            $data = array(
                'status_code'       => $status_code
            );
            
            $this->db->where('user_status_id', $user_status_id);
            return $this->db->update('user_status', $data);
        }
        
        public function is_new_account()
        {
            $is_new_account = true;
            
            if($this->session->userdata("IS_NEW_ACCOUNT") == "No")
            {
                $is_new_account = false;
            }
            
            return $sis_new_account;
        }
    }
?>