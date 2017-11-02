<?Php
    class Claim extends My_Controller
    {
        public function index()
        {
            $this->is_user_signin();
            
            $this->load->view("admin/templates/header");
            $this->load->view("admin/claim");
            $this->load->view("admin/templates/footer");
        }
        
           public function create_claim()
        {
            $this->claim_model->create_claim();
        }
    }
?>