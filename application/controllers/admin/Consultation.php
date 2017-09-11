<?Php
    class Consultation extends CI_Controller
    {
        public function index()
        {
            $this->load->view("admin/templates/header");
            $this->load->view("admin/consultations");
            $this->load->view("admin/templates/footer");
        }
    }
?>