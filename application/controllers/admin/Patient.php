<?Php
    class Patient extends My_Controller
    {
        public function index()
        {  
            $branch_id = $this->session->userdata("BRANCH_ID");
            
            //push counter in patiets data
            
            $data['patients']                   = $this->patient_model->fetch_all_patient();
            $data['billing_types']              = $this->billing_model->fetch_billing_type();
            $data["dependant_relationships"]    = $this->medical_model->fetch_relationship();
            //$data['patient_billing_types']      = $this->billing_model->fetch_patient_billing_type();
            $data["practitioners"]              = $this->practitioner_model->fetch_branch_practitioner($branch_id);
            
            if($this->session->userdata("USER_ROLE") == 3)
            {
                $data["practitioner_id"]            = $this->practitioner_model->fetch_practitioner_id($this->session->userdata('USER_ID'));
            }
            
            $this->load->view("admin/templates/header");
            $this->load->view("admin/patients/patients", $data);
            $this->load->view("admin/patients/partial/add-patient-form");
            $this->load->view("admin/templates/footer");
        }
        
        public function create_patient()
        {
            //$this->ajax_fetch_patients();
            if($this->patients_model->create_patient() == TRUE)
            {
                
            }
            else
            {
                
            }
        }
        
        public function edit_patient($patient_id)
        {
            $data['patient'] = $patient_id;
            
            $this->load->view("admin/templates/header");
            $this->load->view("admin/patients/edit_patient", $data);
            $this->load->view("admin/templates/footer");
        }
        
        public function remove_patient()
        {
            if($this->patients_model->remove_patient() == TRUE)
            {
                $this->session->set_flashdata('title', '<h4><i class="fa fa-check-circle-o"></i> Patient removed</h4>.');
                $this->session->set_flashdata('message_type', 'success.');
                $this->session->set_flashdata('message', 'Patient deleted successfully.');
                
                redirect(base_url() . 'patients');
            }
            else
            {
                $this->session->set_flashdata('title', '<h4><i class="fa fa-times-circle-o"></i> Failed</h4>.');
                $this->session->set_flashdata('message_type', 'danger');
                $this->session->set_flashdata('message', 'Error occured. Patient was not removed.');
                
                redirect(base_url() . 'patients');
            }
        }
        
        public function add_claima_patient()
        {
            $branch_id      = $this->input->post('ex_branch_id');
            $patient_id     = $this->input->post('existing_patient_id');
            
            $this->patient_model->create_treatment_branch($branch_id, $patient_id);
        }
        
        //create diagnosis
        public function create_diagnosis()
        {
            //var_dump($this->patients_model->fetch_all_patient()[0]);
            
            //echo $this->patients_model->calculate_age("1991-09-21");
            $this->ajax_fetch_patients();
            /*if($this->patients_model->create_diagnosis() == TRUE)
            {
                
            }
            else
            {
                
            }*/
        }
        
        //search branch patient
        public function search_branch_patient()
        {
            $q      = $this->input->post("q");
            $data   = array();
            
            if($this->patient_model->search_branch_patient($this->session->userdata("BRANCH_ID"), $q) == TRUE)
            {
                $data = $this->patient_model->fetch_patient();
            }
            
            echo json_encode($data);
        }
        
        //search claima patients
        public function search_claima_patient()
        {
            if($this->patient_model->search_claima_patient() == TRUE)
            {
                //if patient is found, call fetch_patient method()
                echo json_encode($this->patients_model->fetch_patient());
            }
            else
            {
                $error = array(
                    'not_found' => 'Patient with ID number ' . $this->input->post('q') . ' does not exist.'
                );
                
                echo json_encode($error);
            }
        }
        
        //fetch billing types
        public function fetch_billing_type()
        {
            
        }
        
        public function fetch_patient_medical_aid()
        {
            $patient_id = $this->input->post("id");
            echo json_encode($this->medical_model->fetch_patient_medical_aid($patient_id));
        }
        
        //
        public function ajax_fetch_single_user()
        {
            $patient_id = $this->input->post('id');
            
            $single_user = $this->patient_model->fetch_single_user($patient_id);
            echo json_encode($single_user);
        }
        
        //fetch patients via ajax
        public function ajax_fetch_patients()
        {
            echo json_encode($this->patient_model->fetch_all_patient());
        }
        
        public function patient_file($patient_file)
        {
            //get patient by file number
            $data["patient_details"] = $this->patient_model->fetch_single_patient($patient_file);
            
            //get patient id
            $user_id = $this->patient_model->fetch_single_patient($patient_file)["user_id"];
            $date_of_birth = $this->patient_model->fetch_single_patient($patient_file)["dob"];
            
            //non applicable values
            $data["non_applicable"]         = "N/A";
            
            //get patient details
            $data["age"]                    = $this->patient_model->calculate_age($date_of_birth);
            $data["patient_addresses"]      = $this->patient_model->fetch_single_patient($user_id);
            $data["patient_email_contacts"] = $this->communication_model->fetch_email_contact($user_id);
            $data["patient_phone_contacts"] = $this->communication_model->fetch_phone_contact($user_id);
            
            $this->load->view("admin/templates/header");
            $this->load->view("admin/patients/patient_file", $data);
            $this->load->view("admin/templates/footer");
        }
    }
?>