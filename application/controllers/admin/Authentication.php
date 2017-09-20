<?Php
    class Authentication extends CI_Controller
    {
        /*
        *
        *
        *
        */
        
        //practice signup
        public function signup()
        {
            
        }
        
        //user login
        public function signin()
        {
            $this->session->set_userdata("USER_ROLE", 1);
            $this->session->set_userdata("USER_ID", 10);
            redirect(base_url() . "admin/dashboard");
        }
        
        public function forgot_password()
        {
            $this->load->view("admin/templates/auth-header");
            $this->load->view("admin/forgotpassw");
            $this->load->view("admin/templates/auth-footer");
        }
    }   
?>