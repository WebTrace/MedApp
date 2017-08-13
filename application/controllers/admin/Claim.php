<?Php
    class Claim extends CI_Controller
    {
        public function index()
        {
            $this->load->view("admin/templates/header");
            $this->load->view("admin/claim");
            $this->load->view("admin/templates/footer");
        }
    }
?>