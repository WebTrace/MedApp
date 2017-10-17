<?Php
    class Signin_model extends CI_Model
    {
        public function user_signin()
        {
            $username = $this->input->post("username");
            $password = md5($this->input->post("password"));
            
            /*$this->db->select("*");
            $this->db->from("user u");
            $this->db->from("role r");
            $this->db->from("status s");
            $this->db->join("user_role ur", "r.role_code = ur.role_code");
            $this->db->join("user_status us", "s.status_code = us.status_code");
            $this->db->join("email_contact e", "u.user_id = e.user_id");
            $this->db->join("user_branch b", "u.user_id = b.user_id");
            $this->db->where("username", $username);
            $this->db->where("password", $password);*/
            
            
            $query = $this->data_access->signin_user($username, $password);
            
            if($query->num_rows() == 1)
            {
                $user_data = array(
                    'USER_ID'           => $query->row(0)->user_id,
                    'USER_ROLE'         => $query->row(0)->role_code,
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