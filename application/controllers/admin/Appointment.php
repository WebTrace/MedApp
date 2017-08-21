<?Php
    class Appointment extends CI_controller
    {
        public function index()
        {
            $this->load->view("admin/templates/header");
            $this->load->view("admin/appointments");
            $this->load->view("admin/templates/footer");
        }
    }
?>