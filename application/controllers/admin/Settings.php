<?Php
    class Settings extends My_Controller
    {
        public function index()
        {
            $this->is_user_signin();
            
            $this->load->view("admin/templates/header");
            $this->load->view("admin/sttings/settings");
            $this->load->view("admin/templates/footer");
        }
    }
?>