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
            
            $this->load->view("app/templates/header");
            $this->load->view("app/patients/patients", $data);
            $this->load->view("app/patients/partial/add-patient-form");
            $this->load->view("app/templates/footer");
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
            
            $this->load->view("app/templates/header");
            $this->load->view("app/patients/edit_patient", $data);
            $this->load->view("app/templates/footer");
        }
        
        public function update_patient()
        {
            $user_id = $this->input->post("user_id");
            var_dump($this->input->post());
            
            if($this->patient_model->update_personal_details($user_id))
            {
                
            }
            {
                
            }
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
        
        public function create_claima_patient()
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
        
        public function patient_app_search()
        {
            $search_param   = $this->input->post('query');
            $ajax_flag      = $this->input->post('flag');
            $branch_id      = $this->session->userdata('BRANCH_ID');
            
            $search_results = $this->patient_model->search_app_patient($search_param, $branch_id)->result_array();
            
            if(isset($ajax_flag) && $ajax_flag == 1)
            {
                echo json_encode($search_results);
            }
            else
            {
                return $search_results;
            }
        }
        
        //fetch single patient
        public function fetch_single_patient()
        {
            $patient_file = $this->input->post("file_no");
            $flag = $this->input->post("flag");
            
            if(isset($flag) && $flag == 1)
            {
                echo json_encode($this->patient_model->fetch_single_patient($patient_file));
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
        
        public function patient_file($user_id)
        {
            //get patient by file number
            $data["patient_details"] = $this->patient_model->fetch_single_patient($user_id);
            
            //get patient patient
            $single_patient = $this->patient_model->fetch_single_patient($user_id);
            $date_of_birth  = $single_patient["dob"];
            
            //non applicable values
            $data["non_applicable"]         = "N/A";
            $data["user_id"]                = $user_id;
            
            //get patient details
            $data["age"]                    = $this->patient_model->calculate_age($date_of_birth);
            $data["patient_addresses"]      = $this->patient_model->fetch_single_patient($user_id);
            $data["patient_email_contacts"] = $this->communication_model->fetch_email_contact($user_id);
            $data["patient_phone_contacts"] = $this->communication_model->fetch_phone_contact($user_id);
            
            $this->load->view("app/templates/header");
            $this->load->view("app/patients/patient_file", $data);
            $this->load->view("app/templates/footer");
        }
    }
?>