<?Php
    class Patients extends CI_Controller
    {
        public function index()
        {
            $this->load->view("admin/templates/header");
            $this->load->view("admin/patients");
            $this->load->view("admin/templates/footer");
        }
    }
?>