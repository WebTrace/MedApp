<?Php
    class Practice extends My_Controller
    {
        public function index()
        {
            $this->is_user_signin();
            
            $this->load->view("admin/templates/auth-header");
            $this->load->view("admin/add-practice");
            $this->load->view("admin/templates/auth-footer");
        }
        
        public function add_practice()
        {
            
        }
    }
?>