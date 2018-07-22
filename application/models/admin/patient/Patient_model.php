<?Php
    class Patient_model extends CI_Model
    {
        public function create_patient()
        {
            //get patients inputs - personal details
            $title                          = $this->input->post('title');
            $first_name                     = $this->input->post('fname');
            $last_name                      = $this->input->post('lname');
            $id_number                      = $this->input->post('idno');
            $dob                            = $this->input->post('dob');
            $ethnic_group                   = $this->input->post('ethnic_group');
            
            //get patient details - contact details
            $contact_number                 = $this->input->post('contact_no');
            $email_address                  = $this->input->post('email_address'); //optional
            
            //get patient details - physical address details
            $phy_address_line               = $this->input->post('phy_address_line');
            $phy_street                     = $this->input->post('phy_street_name');
            $phy_suburb                     = $this->input->post('phy_suburb');
            $phy_postal_code                = $this->input->post('phy_postal_code');
            $same_address                   = $this->input->post('same_address');
            
            //get  patient details - postal address details if set
            $pos_address_line               = $this->input->post('pos_address_line');
            $pos_street                     = $this->input->post('pos_street_name');
            $pos_suburb                     = $this->input->post('pos_suburb');
            $pos_postal_code                = $this->input->post('pos_postal_code');
            $address_type_code              = 1;
            
            //get patient details - billing details
            $billing_type                   = $this->input->post("billing_type");
            
            //get patient inputs - medical aid details if set
            $medical_aid_name               = $this->input->post('med_aid_scheme');
            $medical_aid_option             = $this->input->post('med_aid_option');
            $medical_aid_number             = $this->input->post('med_aid_number');
            $price_option                   = "Test";//$this->input->post('med_aid_price');
            
            //get patient inputs - dependant details
            $dependant_no                   = $this->input->post('dependant_no');
            $relaltionship_code             = $this->input->post('dependant_relation');
            $is_dependant                   = $this->input->post('dependant');
            
            //get visiting reason data
            $appointment_title              = $this->input->post('appointment_desc');
            $visiting_reason                = $this->input->post('visiting_reason');
            $practitioner_appointment       = $this->input->post('appointment_practitioner');
            
            //get patients inputs - account details
            $username                       = $this->input->post('username'); //optional
            $password                       = $this->input->post('password'); //optionals
            
            /*Begin transaction for creating a patient
            *
            */
            $this->db->trans_start(); //BEGIN TRANSACTION
            
            //create user type of patient
            $this->new_patient_user($title, $first_name, $last_name, $id_number, $dob, $ethnic_group, $username, $password);
            
            //get new user id
            $user_id = $this->signup_model->get_new_added_id('user', 'user_id');
            
            //generate new unique file no
            $file_no = $this->new_file_no();
            
            //create new patient
            $this->new_patient($user_id, $file_no);
            
            //get new patient id
            $patient_id = $this->signup_model->get_new_added_id('patient', 'patient_id');
                
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
            
            //create physical address
            $this->communication_model->create_address($user_id, $phy_address_line, $phy_street, $phy_suburb, $phy_postal_code);
            
            //get new address id
            $address_id = $this->signup_model->get_new_added_id('address', 'address_id');
            
            //create user address type
            $this->communication_model->create_address_type($address_id, $address_type_code);
            
            if($same_address == "Yes")
            {
                $address_type_code = 1;
                
                //create postal address
                $this->communication_model->create_address($user_id, $pos_address_line, $pos_street, $pos_suburb, $pos_postal_code);
                
                //get new address id
                $address_id = $this->signup_model->get_new_added_id('address', 'address_id');
                
                //create user address type
                $this->communication_model->create_address_type($address_id, $address_type_code);
            }
            
            //create patient credentials if requested
            if(1 > 2)
            {
                $this->signin_model->create_credentials($user_id, $username, $password, $hash);
            }
            
            //create treatment branch
            $this->create_treatment_branch($this->session->userdata('BRANCH_ID'), $patient_id);
            
            //create medical aid billing
            if($billing_type == 1)
            {
                $query = $this->fetch_medical_aid_no($medical_aid_number);
                
                if($query->num_rows() > 0)
                {
                    //get exisiting medical aid id
                    $medical_aid_id = $query->row(0)->medical_aid_id;
                }
                else
                {
                    //add new medical aid scheme
                    $this->medical_aid_model->create_medical_aid($patient_id, $medical_aid_number, $medical_aid_name, $medical_aid_option, $price_option);
                    
                    //get new medical aid id
                    $medical_aid_id = $this->signup_model->get_new_added_id('medical_aid', 'medical_aid_id');
                }
                
                //assign a relations of type main member
                if($is_dependant == "No")
                {
                    $relaltionship_code = 1;
                }
                
                //create dependant
                $this->medical_aid_model->create_dependant($patient_id, $medical_aid_id, $dependant_no, $relaltionship_code);
            }
            
            //create cash billing
            if($billing_type != 2)
            {
                $this->billing_model->create_patient_billing_type($patient_id, 2);
            }
            
            //create patient billing type
            $this->billing_model->create_patient_billing_type($patient_id, $billing_type);
            
            //add patient to waiting room
            $this->appointment_model->waiting_room_data($patient_id, $visiting_reason, $appointment_title);
            
            //get new appointment id
            $appointment_id = $this->signup_model->get_new_added_id('appointment', 'appointment_id');
            
            //create appointment status
            $this->appointment_model->create_appointment_status($appointment_id);

            //assign patient in waiting room to a practitioner
            $this->appointment_model->create_practitioner_appointment($practitioner_appointment, $appointment_id);
            
            $this->db->trans_complete();//END TRANSACTION
            
            //tranaction status
            return $this->db->trans_status();
        }
        
        public function new_patient_user($title, $first_name, $last_name, $id_number, $dob, $ethnic_group, $username, $password)
        {
            //get gender
            $gender = $this->user_model->get_gender($id_number);
            
            //patient details
            $patient_data = array(
                'title'             => $title,
                'first_name'        => $first_name,
                'last_name'         => $last_name,
                'id_number'         => $id_number,
                'dob'               => $this->to_mysql_date($dob),
                'gender'            => $gender,
                'ethnic_group'      => $ethnic_group
            );
            
            if($username != "")
            {
                $patient_data = array(
                    'title'             => $title,
                    'first_name'        => $first_name,
                    'last_name'         => $last_name,
                    'id_number'         => $id_number,
                    'dob'               => $dob,
                    'gender'            => $gender,
                    'ethnic_group'      => $ethnic_group,
                    'username'          => $username,
                    'password'          => $password
                );
            }
            
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
        
        public function create_treatment_branch($branch_id, $patient_id)
        {
            $treatment_branch_data = array(
                'branch_id'     => $branch_id,
                'patient_id'    => $patient_id
            );

            //create treatment branch
            return $this->db->insert('treatment_branch', $treatment_branch_data);
        }
        
        //fetch all patient data if search query is true
        public function fetch_patient()
        {
            $unique_id = $this->input->post('q');
            
            $this->db->from('user u');
            $this->db->join("address ad", "u.user_id = ad.user_id");
            $this->db->join("user_address_type uat", "ad.address_id = uat.address_id");
            $this->db->join("address_type at", "at.address_type_code = uat.address_type_code");
            $this->db->join('phone_contact pc', 'u.user_id = pc.user_id');
            $this->db->join('phone_contact_type pct', 'pc.phone_contact_id = pct.phone_contact_id');
            $this->db->join('contact_type ct', 'ct.contact_type_code = pct.contact_type_code');
            $this->db->join('email_contact ec', 'u.user_id = ec.user_id');
            $this->db->join('patient p', 'u.user_id = p.user_id');
            $this->db->where('id_number', $unique_id);
            
            return $this->db->get()->result_array();
        }
        
        public function remove_patient()
        {
            $patient_id = $this->input->post('patient_id');
            
            $this->db->where('patient_id', $patient_id);
            return $this->db->delete('treatment_branch');
        }
        
        public function fetch_all_patient()
        {
            $this->db->from("user u");
            $this->db->join("patient p", "u.user_id = p.user_id");
            $this->db->join("phone_contact pc", "u.user_id = pc.user_id");
            $this->db->join("treatment_branch tb", "p.patient_id = tb.patient_id");
            $this->db->where('tb.branch_id', $this->session->userdata('BRANCH_ID'));
            
            return $this->db->get()->result_array();
        }
        
        public function fetch_single_patient($patient_file)
        {
            $this->db->from('patient p');
            $this->db->join('user u', 'p.user_id = u.user_id');
            $this->db->join('phone_contact pc', 'u.user_id = pc.user_id');
            $this->db->where('p.file_no', $patient_file);
            
            return $this->db->get()->row_array();
        }
        
        //fetch medical aid number
        public function fetch_medical_aid_no($medical_aid_no)
        {
            $this->db->where("medical_aid_no", $medical_aid_no);
            return $this->db->get("medical_aid");
        }
        
        //search branch patients //function call: waititng room
        public function search_branch_patient($branch_id, $q)
        {
            $this->db->from('user u');
            $this->db->join('patient p', 'u.user_id = p.user_id');
            $this->db->join('treatment_branch t', 'p.patient_id = t.patient_id');
            $this->db->where('id_number', $q);
            $this->db->where('t.branch_id', $this->session->userdata("BRANCH_ID"));
            
            if($this->db->get()->num_rows() > 0)
            {
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }
        
        public function search_claima_patient()
        {
            $id_number = $this->input->post('q');
            
            $this->db->where('id_number', $id_number);
            
            if($this->db->get('user')->num_rows() == 1)
            {
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }
        
        //appointment patient search
        public function search_app_patient($search_param, $branch_id)
        {
            return $this->data_access->search_app_patient($search_param, $branch_id);
        }
        
        //convert date to MySQL date
        public function to_mysql_date($row_date)
        {
            return date('Y-m-d', strtotime(str_replace('-', '/', $row_date)));
        }
        
        //calculate age
        public function calculate_age($date_of_birth)
        {
            return date_diff(date_create($date_of_birth), date_create('now'))->y;
        }
        
        //generate a new file number
        public function new_file_no()
        {
            //get the privious file number and increment it to create a new file number
            $query = $this->new_record_value("patient_id", "patient", "file_no");
            
            if($query->num_rows() == 1)
            {
                //get previous file number
                $previous_file_no = $query->row(0)->file_no;
                
                //get integer version of the file number
                $file_integer_val = substr($previous_file_no, 2, strlen($previous_file_no));
                
                return $file_no = sprintf("FI%08d", ++$file_integer_val);
            }
            else
            {
                return null;
            }
        }
        
        public function new_record_value($id, $table, $column)
        {
            //select new user id
            $query = $this->db->query("select " . $column . " from " . $table . " order by " . $id . " desc limit 0, 1");
            
            return $query;
        }
        
        public function new_password()
        {
            $password = bin2hex(openssl_random_pseudo_bytes(4));
            
            return $password;
        }
    }
?>