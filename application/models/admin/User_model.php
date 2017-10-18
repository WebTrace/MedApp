<?Php
    class User_model extends CI_Model
    {
        public function create_user()
        {
            $user_branch        = $this->input->post("user_branch");
            $user_role          = $this->input->post("user_role");
            $title              = $this->input->post("title");
            $fname              = $this->input->post("fname");
            $lname              = $this->input->post("lname");
            $id_number          = $this->input->post("id_number");
            $practice_no        = $this->input->post("practice_no");
            $hpcsa_no           = $this->input->post("hpcsa_no");
            $speciality         = $this->input->post("speciality");
            $contact_no         = $this->input->post("contact_no");
            $email_address      = $this->input->post("email");
            $username           = $this->input->post("username");
            $password           = $this->input->post("password");
            
            //begin trasaction for creating a new user
            $this->db->trans_start();
            
            //get user details
            $user_data = array(
                'title'         => $title,
                'first_name'    => $fname,
                'last_name'     => $lname,
                'id_number'     => $id_number,
                'username'      => $username,
                'password'      => $password
            );
            
            //insert user details
            $this->db->insert('user', $user_data);
            
            /*
            *retrieve new user id that was generated when a user register. the following insert
            *statements depend on this new user id.
            */
            $user_id = $this->signup_model->get_new_added_id('user', 'user_id');
            
            //create user role
            $this->create_user_role($user_id, $role_code);
            
            //create user status
            $this->create_user_status($user_id, $status_code);
            
            if($user_role == 4)
            {
                //create practitioner
                $this->practitioner_model->create_practitioner($user_id, $branch_name, $address_line, $city, $province, $location, $default_branch);
            }
            
            //assign branch to a user
            $this->branch_model->assign_user_branch($user_id, $branch_id);
            
            //create phone contact
            $this->communication_model->create_phone_contact($user_id, $contact_no);
            
            /*
            *retrieve new phone contact id that was generated when a user register. the following insert
            *statements depend on this new user id.
            */
            $phone_contact_id = $this->signup_model->get_new_added_id('phone_contact', 'phone_contact_id');
            
            //phone contact priority
            $this->communication_model->create_phone_contact_priority($priority_code, $phone_contact_id);
            
            //create phone contact type
            $this->communication_model->create_phone_contact_type($contact_type_code, $phone_contact_id);
            
            //create  email contact
            $this->communication_model->create_email_contact($user_id, $email);
            
            /*
            *retrieve new email contact id that was generated when a user register. the following insert
            *statements depend on this new user id.
            */
            $email_contact_id = $this->signup_model->get_new_added_id('email_contact', 'email_contact_id');
            
            //create email contact type
            $this->communication_model->create_email_contact_type($contact_type_code, $email_contact_id);
            
            //email contact priority
            $this->communication_model->create_email_contact_priority($priority_code, $email_contact_id);
            
            //complete transaction
            $this->db->trans_complete();
            
            //return transaction status
            $this->db->trans_status();
        }
        
        public function update_user()
        {
            
        }
        
        public function fetch_single_user()
        {
            
        }
        
        public function fetch_users()
        {
            
        }
        
        public function remove_user()
        {
            
        }
        
        /*
        *
        */
        public function create_user_role($user_id, $role_code)
        {
            $user_role_data = array(
                'user_id'       => $user_id,
                'role_code'     => $role_code
            );
            
            //insert user role details
            $this->db->insert('user_role', $user_role_data);
        }
        
        /*
        *
        */
        public function create_user_status($user_id, $status_code)
        {
            $user_status_data = array(
                'status_code'   => $status_code,
                'user_id'       => $user_id
            );
            
            //insert user role details
            $this->db->insert('user_status', $user_status_data);
        }
        
        public function fetch_user_role()
        {
            $this->db->select("*");
            return $this->db->get("role")->result_array();
        }
    }
?>