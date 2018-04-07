<?Php if( ! defined('BASEPATH')) exit('No direct access allowed');
    /*
    *
    */
    class Dashboard extends My_Controller
    {
        public function index()
        {
            $this->load->view("admin/templates/header");
            
            //load partial template for specific user roles
            if($this->session->userdata("USER_ROLE") == 4)
            {
                $this->load->view("admin/partial/dashboard/_manager");
            }
            else if($this->session->userdata("USER_ROLE") == 3)
            {
                $this->load->view("admin/partial/dashboard/_practitioner");
            }
            else if($this->session->userdata("USER_ROLE") == 2)
            {
                $this->load->view("admin/partial/dashboard/_receptionist");
            }
            else if($this->session->userdata("USER_ROLE") == 1)
            {
                $this->load->view("admin/partial/dashboard/_patient");
            }
            
            $this->load->view("admin/templates/footer");
        }
    }
?>