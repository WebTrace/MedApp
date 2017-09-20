<?Php
    class Signup_model extends CI_Model
    {
        public function signup_practioner()
        {
            /*Begin transaction for signing a practitioner
            *
            */
            
            $this->db->trans_start();
            
            //get practitioner personal details
            $user_data = array(
                'title'             => $this->input->post("title"),
                'first_name'        => $this->input->post("fname"),
                'last_name'         => $this->input->post("lname"),
                'username'          => $this->input->post("username"),
                'password'          => $this->input->post("password"),
                'hash'              => 1
            );
            
            //insert user details into user table
            $this->db->insert('user', $user_data);
            
            //get new user id
            $user_id = get_new_user_id();
            
            //get phone contact details
            $phone_data = array(
                'user_id' => $user_id,
                'contact_no'=> $this->input->post()
            );
            
            //insert phone details
            $this->db->insert('phone_contact', $phone_data);
            
            //get email contact details
            $email_data = array(
                'email_address'     => $this->input->post()
            );
            
            //insert email details
            $this->db->insert('email_contact', $email_data);
            
            //get practice details
            $practice_data = array(
                'user_id' =>,
                'practice_no' => $this->input->post('practice_no', )
            );
            
            //insert practice details
            $this->db->insert('practi', $practice_data);
            
            //get branch details
            $branch_data = array(
                'user_id'           => ,
                'branch_name'       => $this->input->post(""),
                'address_line'      => $this->input->post(""),
                'suburb'            => $this->input->post(""),
                'city'              => $this->input->post(""),
                'province'          => $this->input->post(""),
                'location'          => $this->input->post("")
            );
            
            //insert branch details
            $this->db->insert('branch', $branch_data);
            
            $this->db->trans_complete();
            
            return $this->db->trans_status();
        }
        
        public function get_new_user_id()
        {
            //select new user id
        }
    }
?>