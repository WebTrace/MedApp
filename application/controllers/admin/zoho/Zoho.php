<?Php
    class Zoho extends CI_Controller
    {
        public function index()
        {
            $this->load->view("admin/templates/auth-header");
            $this->load->view("admin/zoho/home");
            $this->load->view("admin/templates/auth-footer");
        }
    }
?>