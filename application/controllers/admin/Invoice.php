<?Php
    class Invoice extends CI_Controller
    {
        public function index()
        {
            $this->load->view("admin/templates/header");
            $this->load->view("admin/invoice");
            $this->load->view("admin/templates/footer");
        }
    }
    
?>