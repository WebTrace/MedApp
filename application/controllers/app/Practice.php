<?Php
    class Practice extends My_Controller
    {
        public function index()
        {
            
            $this->load->view("app/templates/auth-header");
            $this->load->view("app/add-practice");
            $this->load->view("app/templates/auth-footer");
        }
        
        public function add_practice()
        {
            
        }
    }
?>