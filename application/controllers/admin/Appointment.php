<?Php  defined('BASEPATH') OR exit('No direct script access allowed');
    class Appointment extends My_Controller
    {
        Public function index()
        {
            $this->load->view("admin/templates/header");
            $this->load->view("admin/appointments/appointments");
            $this->load->view("admin/templates/footer");
        }
        
        public function waiting_room()
        {
            $this->load->view("admin/templates/header");
            $this->load->view("admin/appointments/waiting_room");
            $this->load->view("admin/templates/footer");
        }
        
        public function create_appointment()
        {
            
        }
        
        public function creatre_waiting_room()
        {
            if($this->appointment_model->create_waiting_room() == TRUE)
            {
                $data["status"] = "Added";
            }
            else
            {
                $data["status"] = "Failed";
            }
            
            $this->load->view("admin/templates/header");
            $this->load->view("admin/waiting_room", $data);
            $this->load->view("admin/templates/footer");
        }
        
        
        
        
        
        
        
        
        
        
        
        

        /*Get all Appointments */

        Public function getAppointments()
        {
            $result=$this->Calendar_model->getAppointment();
            echo json_encode($result);
        }
        /*Add new Appointment */
        Public function addAppointment()
        {
            $result=$this->Calendar_model->addAppointment();
            echo $result;
        }
        /*Update Appointment */
        Public function updateAppointment()
        {
            $result=$this->Calendar_model->updateAppointment();
            echo $result;
        }
        /*Delete Appointment*/
        Public function deleteAppointment()
        {
            $result=$this->Calendar_model->deleteAppointment();
            echo $result;
        }
        Public function dragUpdateAppointment()
        {	

            $result=$this->Calendar_model->dragUpdateAppointment();
            echo $result;
        }



    }
?>