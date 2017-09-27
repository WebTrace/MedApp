<?Php
    class Signin_model extends CI_Model
    {
        public function user_signin()
        {
            $username = $this->input->post("username");
            $password = md5($this->input->post("password"));
            
            $this->db->select("*");
            $this->db->from("user u");
            $this->db->join("email_contact e", "u.user_id = e.user_id");
            $this->db->where("username", $username);
            $this->db->where("password", $password);
            
            $query = $this->db->get();
            
            if($query->num_rows() == 1)
            {
                $user_data = array(
                    'USER_ID'           => $query->row(0)->user_id,
                    'USER_ROLE'         => $query->row(0)->user_role,
                    'USER_STATUS'       => $query->row(0)->user_status,
                    'FNAME'             => $query->row(0)->first_name,
                    'LNAME'             => $query->row(0)->last_name,
                    'HASH'              => $query->row(0)->hash,
                    'EMAIL'             => $query->row(0)->email_address
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