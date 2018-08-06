<?Php
    class Settings extends My_Controller
    {
        public function index()
        {
            $this->is_user_signin();
            
            $this->load->view("app/templates/header");
            $this->load->view("app/settings/settings");
            $this->load->view("app/templates/footer");
        }
        
        public function security_setting()
        {
            $this->load->view("app/templates/header");
            $this->load->view("app/settings/security");
            $this->load->view("app/templates/footer");
        }
    }
?>