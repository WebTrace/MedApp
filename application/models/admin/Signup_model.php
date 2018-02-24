<?Php
    class Signup_model extends CI_Model
    {
        public function signup_practioner()
        {
            /*get all user inputs
            *
            *
            */
            $title              = $this->input->post("title");          
            $fname              = $this->input->post("fname");
            $lname              = $this->input->post("lname");
            $username           = $this->input->post("username");
            $password           = $this->input->post("password");
            $confirm_passw      = $this->input->post("confirm_password");
            $contact_no         = $this->input->post('contact_no');
            $email              = $this->input->post('email_address');
            $confirm_email      = $this->input->post('confirm_email');
            $hpcsa_no           = $this->input->post('hpcsa_no');
            $practice_no        = $this->input->post('practice_no');
            $speciality         = $this->input->post('practice_type');
            $branch_name        = $this->input->post("practice_name");
            $address_line       = $this->input->post("address_line");
            $city               = $this->input->post("city");
            $province           = $this->input->post("province");
            $location           = $this->input->post("location");
            $default_branch     = "YES";
            $hash               = md5(rand(0, 1000) . $email);
            $t_and_c            = $this->input->post("terms");;
            
            //pass email address and hash through a session
            $this->session->set_userdata("registration_email", $email);
            $this->session->set_userdata("hash", $hash);
            
            /*Begin transaction for signing a practitioner
            *
            */
            
            $this->db->trans_start(); //BEGIN TRANSACTION
            
            //get practitioner personal details
            $user_data = array(
                'title'             => $title,
                'first_name'        => $fname,
                'last_name'         => $lname,
                'hash'              => $hash
            );
            
            //insert user details into user table
            $this->db->insert('user', $user_data);
            
            /*
            *retrieve new user id that was generated when a user register. the following insert
            *statements depend on this new user id.
            */
            $user_id = $this->get_new_added_id('user', 'user_id');
            
            //create practitioner
            $this->practitioner_model->create_practitioner($user_id, $hpcsa_no, $practice_no);
            
            //create login credentials
            $this->signup_model->create_credentials($user_id, $username, $password);
            
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
            
            //assign practitioner speciality
            //$this->practitioner_model->create_practitioner_speciality($user_id, $speciality);
            
            //create branch
            $this->branch_model->create_branch($user_id, $branch_name, $address_line, $city, $province, $location, $default_branch);
            
            //get new branch id
            $branch_id = $this->signup_model->get_new_added_id('branch', 'branch_id');
            
            //assign branch to a user
            $this->branch_model->assign_user_branch($user_id, $branch_id);
            
            //complete MySQL transaction
            $this->db->trans_complete(); //COMPLETE TRANSACTION
            
            //return transaction status
            return $this->db->trans_status();
        }
        
        /*
        *get new id that was generated
        */
        public function get_new_added_id($table, $column)
        {
            //select new user id
            $query = $this->db->query("SELECT " . $column . " FROM " . $table . " ORDER BY " . $column . " DESC LIMIT 0, 1");
            return $query->row(0)->$column;
        }
    }
?>