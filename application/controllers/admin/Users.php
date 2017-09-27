<?Php
    class Users extends My_Controller
    {
        public function index()
        {
            $this->is_user_signin();
            
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
        public function user_Permission()
        {
            
        }
    }
?>