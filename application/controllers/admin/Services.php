<?Php
    class Services extends My_Controller
    {
        public function index()
        {
            $this->load->view("admin/templates/header");
            $this->load->view("admin/settings/service-manager");
            $this->load->view("admin/templates/footer");
        }
    }
?>