<?Php
    class Claim_model extends CI_Model
    {
        public function create_claim()
        {
            //get Authorization_Number input - Referring doctor details
            $authorization_no               = $this->input->post('Authorization_Number');
           
            
            //get Treatment_Location and Treatment_Date inputs 
            $treatment_time                 = $this->input->post('Treatment_Location');
            $claim_date                     = $this->input->post('Treatment_Date'); //optional
            
                          
            
            /*Begin transaction for creating a claim
            *
            */
            $this->db->trans_start(); //BEGIN TRANSACTION
            
            //create user type of patient
            $this->new_claim($authorization_no, $treatment_time, $claim_date);
            
            //get new user id
            $claim_id = $this->signup_model->get_new_added_id('claim', 'claim_id');
            
            //generate new unique file no
//            $file_no = $this->new_file_no($user_id);
            
            //create new patient
//            $this->new_patient($user_id, $file_no);
            
            //create patient phone contact
//            $this->communication_model->create_phone_contact($user_id, $contact_number);
            
            //get new phone contact id
//            $phone_contact_id = $this->signup_model->get_new_added_id('phone_contact', 'phone_contact_id');
            
            //create phone contact type
//            $this->communication_model->create_phone_contact_type(1, $phone_contact_id);
            
            //create phone contact priority
//            $this->communication_model->create_phone_contact_priority(1, $phone_contact_id);
            
     
            
            //create medical aid billing
//            $this->medical_aid_model->create_medical_aid($user_id, $medical_aid_number, $medical_aid_name, $medical_aid_option);
            
            //get new medical aid id
//            $medical_aid_id = $this->signup_model->get_new_added_id('medical_aid', 'medical_aid_id');
            
            //create dependant
//            $this->medical_aid_model->create_dependant($user_id, $medical_aid_id, $dependant_code, $relaltionship_code);
            //TODO : create cash billing
            //TODO : create account
            
            $this->db->trans_complete();//END TRANSACTION
            
            //tranaction status
            return $this->db->trans_status();
        }
        
        public function new_claim($authorization_no, $claim_date, $treatment_time)
        {
            //patient details
            $claim_data = array(
                'authorization_no'             => $authorization_no,
                'claim_date'                   => $claim_date,
                'treatment_time'               => $treatment_time
            );
                
            //create new user
            $this->db->insert('claim', $claim_data);
        }
        
//        public function new_patient($user_id, $file_no)
//        {
//            $patient_data = array(
//                'user_id'           => $user_id,
//                'file_no'           => $file_no
//            );
//            
//            //create new patient
//            $this->db->insert('patient', $patient_data);
//        }
        
        public function fetch_claim()
        {
            
        }
        
        public function update_claim()
        {
            
        }
        
        public function delete_claim()
        {
            
        }
        
        //generate a new file number
//        public function new_file_no($user_id)
//        {
//            $file_no = 'CL' . $user_id;
//            
//            for($i = 1; $i <= 5; $i++)
//            {
//                $random_no = rand(1, 100000);
//            }
//            
//            return $file_no;
//        }
    }
?>