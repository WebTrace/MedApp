<?Php
    class Settings extends CI_Controller
    {
        public function index()
        {
            $this->load->view("admin/templates/header");
            $this->load->view("admin/settings");
            $this->load->view("admin/templates/footer");
        }
    }
?>