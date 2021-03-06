<?Php  defined('BASEPATH') OR exit('No direct script access allowed');
    class Appointment extends My_Controller
    {
        Public function index()
        {
          $branch_id = $this->session->userdata("BRANCH_ID");
          $practitioner_id = 59; //test
          $status = APP_OPEN;
              
          $data["branch_services"] = $this->branch_model->fetch_branch_speciality($branch_id);
          $data["appointments"] = $this->appointment_model->fetch_practitioner_appointment($practitioner_id, $branch_id, $status)->result_array();
          
          $this->load->view("app/templates/header");
          $this->load->view("app/appointments/appointments", $data);
          $this->load->view("app/patients/partial/add-patient-form");
          $this->load->view("app/templates/footer");
        }
        
        public function create_appointment()
        {
            if($this->appointment_model->create_appointment() == true)
            {
              
            }
            else
            {
                
            }
        }
        
        public function waiting_room()
        {
            //get patient id
          $patient_id = $this->input->post('patient_id');
          
          $data['practitioners']          = $this->practitioner_model->fetch_branch_practitioner($this->session->userdata('BRANCH_ID'));
          $data['patient_billing_type']   = $this->billing_model->fetch_patient_billing_type($patient_id);
          $data['waiting_room_patients']  = $this->appointment_model->fetch_waiting_room();
          
          $this->load->view("app/templates/header");
          $this->load->view("app/appointments/waiting_room", $data);
          $this->load->view("app/templates/footer");
        }
        
        public function create_checkup()
        {
          if($this->appointment_model->create_checkup())
          {
            echo "Created";
          }
          else
          {
            echo "Failed";
          }
        }
        
        public function fetch_wating_room()
        {
          $patient_id = $this->input->post("patient_id");
          echo json_encode($this->appointment_model->fetch_wating_room($patient_id));
        }
        
        public function schedule_setting()
        {
          
        }
        
        public function single_waiting_room()
        {
          $waiting_room_id        = $this->input->post("appointment_id");
          $practitioner_app_id    = $this->input->post("practitioner_app_id");
          
          $data = $this->appointment_model->fetch_single_waiting_room($waiting_room_id, FALSE);
          
          $fname                          = $data[0]["first_name"];
          $lname                          = $data[0]["last_name"];
          $appointment_id                 = $data[0]["appointment_id"];
          $practitioner_id                = $data[0]["appointment_id"];
          $title                          = $data[0]["appointment_title"];
          $appointment_reason             = $data[0]["reason"];
          $billing_type                   = $data[0]["reason"];
          $date                           = $data[0]["date_created"];
          $time                           = $data[0]["reason"];
          
          $output = "
              <div>
                  <div class='media'>
                      <span class='pull-left format-span'>
                          <i class='fa fa-user-o'></i>
                      </span>
                      <div class='media-body'>
                          <h4 class='media-heading'>
                              <span style='margin-top: 0px; display: inline-block;'>$fname $lname</span>
                              <div class='pull-right'>
                                  <span data='$appointment_id' title='Edit' class='manage-waiting' data-toggle='modal' 
                                      data-target='#edit_waiting_room'><i class='fa fa-pencil'></i></span>
                                  <span data='$practitioner_id' title='Print visiting reasons' class='practitioner_refer_id' data-app-id='$practitioner_app_id'
                                      data-toggle='modal' data-target='#create_appointment_referrer'><i class='fa fa-print'></i></span>
                                  <span data='$practitioner_id' title='Reffer to another practitioner' class='practitioner_refer_id' data-app-id='$practitioner_app_id'
                                      data-toggle='modal' data-target='#create_appointment_referrer'><i class='fa fa-share-square-o'></i></span>
                                  <span data='$appointment_id' title='Remove' class='manage-waiting'><i class='fa fa-times'></i></span>
                              </div>
                          </h4>
                          <p style='margin-bottom: 2px;' class='small text-muted'><i class='fa fa-clock-o'></i> 23 Jan 2017 | 4:32 PM | Billing: Medical aid</p>
                      </div>
                  </div>
                  <div class='appointment-prev'>
                      <h4 style='margin-bottom: 20px;'>$title</h4>
                      <p>$appointment_reason</p>
                  </div>
              </div>
          ";
          
          echo $output;
        }
        
        public function create_reffer_patient()
        {
          if($this->appointment_model->create_reffer_patient() == TRUE)
          {
            
          }
        }
        
        public function create_waiting_room()
        {
            $data = array();
            
            if($this->appointment_model->create_waiting_room() == TRUE)
            {
              $data = $this->appointment_model->fetch_waiting_room();
            }
            
            echo json_encode($data);
        }
        
        public function patient_waiting_room()
        {
          $patient_id = $this->input->post('id');
          
          $this->appointment_model->fetch_patient_wating_room($patient_id, TRUE);
        }
        
        public function fetch_checkup_appointment()
        {
          $patient_id = 37;//$this->input->post('id');
          
          $data = $this->data_access->fetch_checkup_appointment($patient_id);
          
          echo json_encode($data);
        }
        
        public function is_patient_waiting()
        {
          $id_number = $this->input->post('id_number');
          echo json_encode($this->data_access->is_patient_waiting($id_number));
        }
    }
?>