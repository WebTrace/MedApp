<?Php
    class Signin extends CI_Controller
    {
        public function index()
        {
            $this->load->view("admin/templates/auth-header");
            $this->load->view("admin/signin");
        }
    }
?>