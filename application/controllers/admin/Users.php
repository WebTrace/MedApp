<?Php
    class Users extends CI_Controller
    {
        public function index()
        {
            $this->load->view("admin/templates/header");
            $this->load->view("admin/users");
            $this->load->view("admin/templates/footer");
        }
    }
?>