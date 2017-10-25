<?Php
    class Patients extends My_Controller
    {
        public function index()
        {
            //check if user is signed in
            $this->is_user_signin();
            
            $branch_id = $this->session->userdata("BRANCH_ID");
            
            $data['patients']                   = $this->patients_model->fetch_all_patient();
            $data['billing_types']              = $this->billing_model->fetch_billing_type();
            $data["dependant_relationships"]    = $this->medical_aid_model->fetch_relationship();
            $data["practitioners"]              = $this->practitioner_model->fetch_branch_practitioner($branch_id);
            
            $this->load->view("admin/templates/header");
            $this->load->view("admin/patients", $data);
            $this->load->view("admin/templates/footer");
        }
        
        public function create_patient()
        {
            if($this->patients_model->create_patient() == TRUE)
            {
                
            }
            else
            {
                
            }
        }
        
        //create diagnosis
        public function create_diagnosis()
        {
            if($this->patients_model->create_diagnosis() == TRUE)
            {
                
            }
            else
            {
                
            }
        }
        
        //search claima patients
        public function search_claima_patient($patient_id)
        {
            if($this->patients_model->search_claima_patient($patient_id) == TRUE)
            {
                
            }
            else
            {
                
            }
        }
        
        //fetch billing types
        public function fetch_billing_type()
        {
            
        }
    }
?>