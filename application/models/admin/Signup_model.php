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
            $password           = md5($this->input->post("password"));
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
            $this->session->set_userdata("registration_email");
            $this->session->set_userdata("hash");
            
            /*Begin transaction for signing a practitioner
            *
            */
            
            $this->db->trans_start();
            
            //get practitioner personal details
            $user_data = array(
                'title'             => $title,
                'first_name'        => $fname,
                'last_name'         => $lname,
                'username'          => $username,
                'password'          => $password,
                'hash'              => $hash,
                'user_role'         => 3
            );
            
            //insert user details into user table
            $this->db->insert('user', $user_data);
            
            //get new user id
            $user_id = $this->get_new_user_id();
            
            //get phone contact details
            $phone_data = array(
                'user_id'       => $user_id,
                'contact_no'    => $contact_no
            );
            
            //insert phone details
            $this->db->insert('phone_contact', $phone_data);
            
            //get email contact details
            $email_data = array(
                'user_id'           => $user_id,
                'email_address'     => $email
            );
            
            //insert email details
            $this->db->insert('email_contact', $email_data);
            
            //get practice details
            $practice_data = array(
                'user_id'           => $user_id,
                'hpcsa_no'          => $hpcsa_no,
                'practice_no'       => $practice_no,
                'speciality_code'        => $speciality
            );
            
            //insert practice details
            $this->db->insert('practice', $practice_data);
            
            //get branch details
            $branch_data = array(
                'user_id'           => $user_id,
                'branch_name'       => $branch_name,
                'branch_contact'    => $branch_name,
                'address_line'      => $address_line,
                'city'              => $city,
                'province'          => $province,
                'location'          => $location,
                'default_branch'    => $default_branch
            );
            
            //insert branch details
            $this->db->insert('branch', $branch_data);
            
            $this->db->trans_complete();
            
            return $this->db->trans_status();
        }
        
        public function get_new_user_id()
        {
            //select new user id
            $query = $this->db->query("SELECT user_id FROM user ORDER BY user_id DESC LIMIT 0, 1");
            return $query->row(0)->user_id;
        }
    }
?>