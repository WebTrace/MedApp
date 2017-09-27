<?Php if( ! defined('BASEPATH')) exit('No direct access allowed');
    /*
    *
    */
    class Dashboard extends My_Controller
    {
        public function index()
        {
            //check if users have signed in. if not redirect 
            $this->is_user_signin();
            
            $this->load->view("admin/templates/header");   
            $this->load->view("admin/dashboard");
            $this->load->view("admin/templates/footer");
        }
    }
?>