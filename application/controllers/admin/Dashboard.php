<?Php if( ! defined('BASEPATH')) exit('No direct access allowed');
    /*
    *
    */
    class Dashboard extends My_Controller
    {
        public function index()
        {
            $this->load->view("admin/templates/header");
            //load partial template for specific user role
            
            
            if($this->session->userdata("ROLE_NAME") == "MANAGER")
            {
                $this->load->view("admin/partial/_manager");
            }
            else if($this->session->userdata("ROLE_NAME") == "PRACTITIONER")
            {
                $this->load->view("admin/partial/_practitioner");
            }
            else if($this->session->userdata("ROLE_NAME") == "RECEPTIONIST")
            {
                $this->load->view("admin/partial/_receptionist");
            }
            else if($this->session->userdata("ROLE_NAME") == "PATIENT")
            {
                $this->load->view("admin/partial/_patient");
            }
            
            $this->load->view("admin/templates/footer");
        }
    }
?>