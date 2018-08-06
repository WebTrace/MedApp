<?Php
    class Reports extends My_Controller
    {
        public function index()
        {
            $this->is_user_signin();
            
            $this->load->view("app/templates/header");
            $this->load->view("app/reports/reports");
            $this->load->view("app/templates/footer");
        }
    }
?>