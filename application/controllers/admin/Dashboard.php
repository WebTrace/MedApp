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
            if($this->session->userdata("ROLE_NAME") == "MANAGER")
            {
                $this->load->view("admin/partial/dashboard/_manager");
            }
            else if($this->session->userdata("ROLE_NAME") == "PRACTITIONER")
            {
                $this->load->view("admin/partial/dashboard/_practitioner");
            }
            else if($this->session->userdata("ROLE_NAME") == "RECEPTIONIST")
            {
                $this->load->view("admin/partial/dashboard/_receptionist");
            }
            else if($this->session->userdata("ROLE_NAME") == "PATIENT")
            {
                $this->load->view("admin/partial/dashboard/_patient");
            }
            
            $this->load->view("admin/templates/footer");
        }
    }
?>