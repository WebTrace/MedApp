<?Php
    class Consultation_model extends CI_Model
    {
        public function create_consultation()
        {
            //get patients inputs - personal details
            $title                          = $this->input->post('title');
            $first_name                     = $this->input->post('fname');
            $last_name                      = $this->input->post('lname');
            $id_number                      = $this->input->post('idno');
            $dob                            = $this->input->post('dob');
            $ethnic_group                   = $this->input->post('ethnic_group');
            
            //get patients details - contact details
            $contact_number                 = $this->input->post('contact_no');
            $email_address                  = $this->input->post('email_address'); //optional
            
            //get patients details - physical address details
            $phy_address_line               = $this->input->post('phy_address_line');
            $phy_street                     = $this->input->post('phy_street_name');
            $phy_suburb                     = $this->input->post('phy_suburb');
            $phy_postal_code                = $this->input->post('phy_postal_code');
            $same_address                   = $this->input->post('same_address');
            
            //get  patients details - postal address details if set
            $pos_address_line               = $this->input->post('pos_address_line');
            $pos_street                     = $this->input->post('pos_street_name');
            $pos_suburb                     = $this->input->post('pos_suburb');
            $pos_postal_code                = $this->input->post('pos_postal_code');
            
            //get patient inputs - medical aid details if set
            $medical_aid_name               = $this->input->post('med_aid_scheme');
            $medical_aid_option             = $this->input->post('med_aid_option');
            $medical_aid_number             = $this->input->post('med_aid_number');
            
            //get patient inputs - dependant details
            $dependant_code                 = $this->input->post('dependant_code');
            $relaltionship_code             = $this->input->post('relationship_code');
            
            //get patients inputs - account details
            $username                       = $this->input->post('username'); //optional
            $password                       = $this->input->post('password'); //optionals
            
            /*Begin transaction for creating a patient
            *
            */
            $this->db->trans_start(); //BEGIN TRANSACTION
            
            //create user type of patient
            $this->new_patient_user($title, $first_name, $last_name, $id_number, $dob, $ethnic_group);
            
            //get new user id
            $user_id = $this->signup_model->get_new_added_id('user', 'user_id');
            
            //generate new unique file no
            $file_no = $this->new_file_no($user_id);
            
            //create new patient
            $this->new_patient($user_id, $file_no);
            
            //create patient phone contact
            $this->communication_model->create_phone_contact($user_id, $contact_number);
            
            //get new phone contact id
            $phone_contact_id = $this->signup_model->get_new_added_id('phone_contact', 'phone_contact_id');
            
            //create phone contact type
            $this->communication_model->create_phone_contact_type(1, $phone_contact_id);
            
            //create phone contact priority
            $this->communication_model->create_phone_contact_priority(1, $phone_contact_id);
            
            //create email contact
            $this->communication_model->create_email_contact($user_id, $email_address);
            
            //get new email contact id
            $email_contact_id = $this->signup_model->get_new_added_id('email_contact', 'email_contact_id');
            
            //create email contact type
            $this->communication_model->create_email_contact_type(1, $email_contact_id);
            
            //create email contact priority
            $this->communication_model->create_contact_email_priority(1, $email_contact_id);
            
            //create medical aid billing
            $this->medical_aid_model->create_medical_aid($user_id, $medical_aid_number, $medical_aid_name, $medical_aid_option);
            
            //get new medical aid id
            $medical_aid_id = $this->signup_model->get_new_added_id('medical_aid', 'medical_aid_id');
            
            //create dependant
            $this->medical_aid_model->create_dependant($user_id, $medical_aid_id, $dependant_code, $relaltionship_code);
            //TODO : create cash billing
            //TODO : create account 
            
            $this->db->trans_complete();//END TRANSACTION
            
            //tranaction status
            return $this->db->trans_status();
        }
        
        public function new_patient_user($title, $first_name, $last_name, $id_number, $dob, $ethnic_group)
        {
            //patient details
            $patient_data = array(
                'title'             => $title,
                'first_name'        => $first_name,
                'last_name'         => $last_name,
                'id_number'         => $id_number,
                'dob'               => $dob,
                'ethnic_group'      => $ethnic_group
            );
                
            //create new user
            $this->db->insert('user', $patient_data);
        }
        
        public function new_patient($user_id, $file_no)
        {
            $patient_data = array(
                'user_id'           => $user_id,
                'file_no'           => $file_no
            );
            
            //create new patient
            $this->db->insert('patient', $patient_data);
        }
        
        public function fetch_patient()
        {
            
        }
        
        public function update_patient()
        {
            
        }
        
        public function delete_patient()
        {
            
        }
        
        //generate a new file number
        public function new_file_no($user_id)
        {
            $file_no = 'CL' . $user_id;
            
            for($i = 1; $i <= 5; $i++)
            {
                $random_no = rand(1, 100000);
            }
            
            return $file_no;
        }
    }
?>