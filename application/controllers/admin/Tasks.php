<?Php
    class Tasks extends CI_Controller
    {
        public function index()
        {
            $this->load->view("admin/templates/header");
            $this->load->view("admin/tasks");
            $this->load->view("admin/templates/footer");
        }
    }
?>