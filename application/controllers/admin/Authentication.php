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
    }   
?>