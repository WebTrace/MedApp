<?Php
    class Invoice extends My_Controller
    {
        public function index()
        {
            $this->load->view("app/templates/header");
            $this->load->view("app/invoice");
            $this->load->view("app/templates/footer");
        }
    }
    
?>