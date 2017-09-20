<?Php
    class Reports extends CI_Controller
    {
        public function index()
        {
            $this->load->view("admin/templates/header");
            $this->load->view("admin/reports");
            $this->load->view("admin/templates/footer");
        }
    }
?>