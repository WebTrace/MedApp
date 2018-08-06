<?Php
    class Zoho extends CI_Controller
    {
        public function index()
        {
            $this->load->view("app/templates/auth-header");
            $this->load->view("app/zoho/home");
            $this->load->view("app/templates/auth-footer");
        }
    }
?>