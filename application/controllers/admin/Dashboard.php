<?Php if( ! defined('BASEPATH')) exit('No direct access allowed');
    /*
    *
    */
    class Dashboard extends CI_Controller
    {
        public function index()
        {
            $this->load->view("admin/templates/header");   
            $this->load->view("admin/dashboard");   
            $this->load->view("admin/templates/footer");   
        }
    }
?>