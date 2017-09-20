<?Php
    class Practice extends CI_Controller
    {
        public function index()
        {
            $this->load->view("admin/templates/auth-header");
            $this->load->view("admin/add-practice");
            $this->load->view("admin/templates/auth-footer");
        }
        
        public function add_practice()
        {
            
        }
    }
?>