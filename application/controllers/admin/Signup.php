<?Php
    class Signup extends CI_Controller
    {
        public function index()
        {
            $this->load->view("admin/templates/auth-header");
            $this->load->view("admin/signup");
            $this->load->view("admin/templates/auth-footer");
        }
        
        public function signup_practitioner()
        {
            
        }
        
        public function deactivate_practitioner()
        {
            
        }
        
        public function feedback()
        {
            $this->load->view("admin/templates/auth-header");
            $this->load->view("admin/feedback/feedback");
            $this->load->view("admin/templates/auth-footer");
        }
    }
?>