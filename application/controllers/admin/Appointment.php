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
            //get patient id
            $patient_id = $this->input->post('patient_id');
            
            $data['practitioners'] = $this->practitioner_model->fetch_branch_practitioner($this->session->userdata('BRANCH_ID'));
            $data['patient_billing_type'] = $this->billing_model->fetch_patient_billing_type($patient_id);
            $data['waiting_room_patients'] = $this->appointment_model->fetch_waiting_room();
            
            $this->load->view("admin/templates/header");
            $this->load->view("admin/appointments/waiting_room", $data);
            $this->load->view("admin/templates/footer");
        }
        
        public function create_appointment()
        {
            
        }
        
        public function create_reffer_patient()
        {
            if($this->appointment_model->create_reffer_patient() == TRUE)
            {
                
            }
        }
        
        public function create_waiting_room()
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
            $this->load->view("admin/appointments/waiting_room", $data);
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