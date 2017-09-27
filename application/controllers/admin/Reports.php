<?Php
    class Reports extends My_Controller
    {
        public function index()
        {
            $this->is_user_signin();
            
            $this->load->view("admin/templates/header");
            $this->load->view("admin/reports");
            $this->load->view("admin/templates/footer");
        }
    }
?>