<?Php
    class Consultation extends My_Controller
    {
        public function index()
        {
            //check if user is signed in
            $this->is_user_signin();
            
            $data['billing_types'] = $this->billing_model->fetch_billing_type();
            
            $this->load->view("admin/templates/header");
            $this->load->view("admin/consultations", $data);
            $this->load->view("admin/templates/footer");
        }
        
        public function create_consultation()
        {
            $this->consultation_model->create_consultation();
        }
        
        //fetch billing types
        public function fetch_billing_type()
        {
            
        }
    }
?>