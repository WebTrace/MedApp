<?Php
    class Patients extends My_Controller
    {
        public function index()
        {  
            $branch_id = $this->session->userdata("BRANCH_ID");
            
            //push counter in patiets data
            
            
            $data['patients']                   = $this->patients_model->fetch_all_patient();
            $data['billing_types']              = $this->billing_model->fetch_billing_type();
            $data['patient_billing_types']      = $this->billing_model->fetch_patient_billing_type();
            $data["dependant_relationships"]    = $this->medical_aid_model->fetch_relationship();
            $data["practitioners"]              = $this->practitioner_model->fetch_branch_practitioner($branch_id);
            
            $this->load->view("admin/templates/header");
            $this->load->view("admin/patients", $data);
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
            $this->load->view("admin/edit_patient", $data);
            $this->load->view("admin/templates/footer");
        }
        
        public function add_claima_patient()
        {
            $branch_id      = $this->input->post('branch_id');
            $patient_id     = $this->input->post('patient_id');
            
            $this->patients_model->create_treatment_branch($branch_id, $patient_id);
            
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
        
        //search claima patients
        public function search_claima_patient()
        {
            if($this->patients_model->search_claima_patient() == TRUE)
            {
                //if patient is found, call fetch_patient method()
                echo json_encode($this->patients_model->fetch_patient());
            }
            else
            {
                $error = array(
                    'not_found' => 'Patient with ID number ' + $this->input->post('q') + ' does not exist.'
                );
                
                echo json_encode($error);
            }
        }
        
        //fetch billing types
        public function fetch_billing_type()
        {
            
        }
        
        //
        public function ajax_fetch_single_user()
        {
            $patient_id = $this->input->post('id');
            
            $single_user = $this->patients_model->fetch_single_user($patient_id);
            echo json_encode($single_user);
        }
        
        //fetch patients via ajax
        public function ajax_fetch_patients()
        {
            echo json_encode($this->patients_model->fetch_all_patient());
        }
    }
?>