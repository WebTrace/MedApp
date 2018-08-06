<?Php
    class Diagnosis extends My_Controller
    {
        public function create_diagnosis()
        {
            if($this->diagnosis_model->create_diagnosis() == TRUE)
            {
                
            }
            else
            {
                
            }
        }
        
        public function update_patient_diagnosis()
        {
            
        }
        
        public function fetch_patient_diagnosis()
        {
            
        }
        
        public function remove_patient_diagnosis()
        {
            
        }
        
        public function create_dispensong()
        {
            $data = array(
                
            );
        }
    }
?>