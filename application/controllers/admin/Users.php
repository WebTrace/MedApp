<?Php
    class Users extends CI_Controller
    {
        public function index()
        {
            $this->load->view("admin/templates/header");
            $this->load->view("admin/users");
            $this->load->view("admin/templates/footer");
        }
        
        public function login()
        {
            
        }
        
        /*
        *define crud for user
        *
        *the following 
        */
        
        public function add_user()
        {
            
        }
        
        public function update_user()
        {
            
        }
        
        public function fetch_users()
        {
            
        }
        
        public function delete_user()
        {
            
        }
        
        /*
        *define user permissions
        *
        */
        pubic function user_Permission()
        {
            
        }
    }
?>