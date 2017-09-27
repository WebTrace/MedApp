<?Php
    class Consultation extends My_Controller
    {
        public function index()
        {
            $this->is_user_signin();
            
            $this->load->view("admin/templates/header");
            $this->load->view("admin/consultations");
            $this->load->view("admin/templates/footer");
        }
    }
?>