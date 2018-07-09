<?Php
    class Schedular extends My_Controller
    {
        public function index()
        {
            $this->load->view("admin/templates/header");
            $this->load->view("admin/settings/schedule-manager");
            $this->load->view("admin/templates/header");
        }
    }
?>