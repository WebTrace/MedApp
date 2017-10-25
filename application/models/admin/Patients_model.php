<?Php
    class Patients_model extends CI_Model
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
            
            //get patient details - billing details
            $billing_type                   = $this->input->post("billing_type");
            
            //get patient inputs - medical aid details if set
            $medical_aid_name               = "Momentum";//$this->input->post('med_aid_scheme');
            $medical_aid_option             = "Ingwe";$this->input->post('med_aid_option');
            $medical_aid_number             = "1023654";$this->input->post('med_aid_number');
            $price_option                   = "Test";//$this->input->post('med_aid_price');
            
            //get patient inputs - dependant details
            $dependant_no                   = $this->input->post('dependant_no');
            $relaltionship_code             = $this->input->post('dependant_relation');
            $is_dependant                   = $this->input->post('dependant');
            
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
            $file_no = $this->new_file_no($user_id);
            
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
            
            //TODO : create cash billing
            
            //TODO : create account
            
            
            $this->db->trans_complete();//END TRANSACTION
            
            //tranaction status
            return $this->db->trans_status();
        }
        
        public function new_patient_user($title, $first_name, $last_name, $id_number, $dob, $ethnic_group, $username, $password)
        {
            //get gender
            $gender = $this->get_gender($id_number);
            
            //patient details
            $patient_data = array(
                'title'             => $title,
                'first_name'        => $first_name,
                'last_name'         => $last_name,
                'id_number'         => $id_number,
                'dob'               => $dob,
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
        
        public function fetch_all_patient()
        {
            $this->db->from("user u");
            $this->db->join("patient p", "u.user_id = p.user_id");
            $this->db->join("phone_contact pc", "u.user_id = pc.user_id");
            $this->db->join("treatment_branch tb", "p.patient_id = tb.patient_id");
            return $this->db->get()->result_array();
        }
        
        public function update_patient()
        {
            
        }
        
        public function delete_patient()
        {
            
        }
        
        //
        public function create_diagnosis()
        {
            //get treatment details
            $patient_id             = $this->input->post("patient_id");
            $practitioner_id        = $this->input->post("practitioner");
            $treatment_place        = $this->input->post("treatment_place");
            $treatment_date         = $this->input->post("treatment_date");
            $treatment_time         = $this->input->post("treatment_time");
            
            //get diagnosis details
            $icd_code               = $this->input->post("icd_code");
            $tariff_code            = $this->input->post("tariff_code");
            $description            = $this->input->post("description");
            $modifier_code          = $this->input->post("modifier_code");
            $quantity               = $this->input->post("quantity");
            $unit_price             = $this->input->post("unit_price");
            $subtotal               = $this->input->post("sub_total");
            
            //get dispensing details
            $nappi_code             = $this->input->post("");
            $item_no                = $this->input->post("");
            $days_supply            = $this->input->post("");
            $cost                   = $this->input->post("");
            $dispense_fee           = $this->input->post("");
            $gross                  = $this->input->post("");
            
            //
            $this->db->trans_start(); //BEGIN SQL TRANSACTION
            
            //create treatment
            $this->treatment_details($patient_id, $practitioner_id, $treatment_place, $treatment_date, $treatment_time);
            
            //get new treatment id
            $treatment_id = $this->signup_mode->get_new_added_id('treatment', 'treatment_id');
            
            //create diagnosis
            $this->diagnosis_details($treatment_id, $idc_code, $tariff_code, $description, $modifier_code, $quantity, $unit_price, $subtotal);
            
            //create dispensing
            if(count($nappi_code) > 0)
            {
                $this->create_despensing($nappi_code, $item_no, $days_supply , $cost, $dispense_fee, $gross);
            }
                
            $this->db->trans_complete(); //END SQL TRANSACTION
            
            //return transaction status
            return $this->db->trans_status();
        }
        
        public function treatment_details($patient_id, $practitioner_id, $treatment_place, $treatment_date, $treatment_time)
        {
            $treatment_data = array(
                'patient_id'        => $patient_id,
                'practitioner_id'   => $practitioner_id,
                'service_place'     => $treatment_place,
                'treatment_date'    => $treatment_date,
                'treatment_time'    => $treatment_time 
            );
            
            $this->db->insert('treatment', $treatment_data);
        }
        
        public function diagnosis_details($treatment_id, $idc_code, $tariff_code, $description, $modifier_code, $quantity, $unit_price, $subtotal)
        {
            for($i = 0; $i < count($idc_code); $i++)
            {
                $diagnosis_data = array(
                    'treatment_id'      => $treatment_id,
                    'IDC_code'          => $idc_code[$i],
                    'tariff_code'       => $tariff_code[$i],
                    'description'       => $description[$i],
                    'modifier_code'     => $modifier_code[$i],
                    'quantity'          => $quantity[$i],
                    'unit_price'        => $unit_price[$i],
                    'sub_total'         => $subtotal[$i]
                );

                $this->insert('medicine', $diagnosis_data);
            }
        }
        
        public function create_despensing($nappi_code, $item_no, $days_supply , $cost, $dispense_fee, $gross)
        {
            for($i = 0; $i < count($nappi_code); $i++)
            {
                $dispensing_data = array(
                    'nappi_code'            => $nappi_code[$i],
                    'item_no'               => $item_no[$i],
                    'days_supply'           => $days_supply[$i],
                    'cost'                  => $cost[$i],
                    'dispense_fee'          => $dispense_fee[$i],
                    'gross'                 => $gross[$i]
                );
                
                $this->db->insert('dispensing', $dispensing_data);
            }
        }
        
        public function create_treatment_branch($branch_id, $patient_id)
        {
            $treatment_branch_data = array(
                'branch_id'     => $branch_id,
                'patient_id'    => $patient_id
            );
            
            //create treatment branch
            $this->db->insert('treatment_branch', $treatment_branch_data);
        }
        
        //fetch medical aid number
        public function fetch_medical_aid_no($medical_aid_no)
        {
            $this->db->where("medical_aid_no", $medical_aid_no);
            return $this->db->get("medical_aid");
        }
        
        public function search_claima_patient($id_number)
        {
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
        
        //get gender from id number
        public function get_gender($id_number)
        {
            $gender_code = substr($id_number, 6, 4);
            
            if($gender_code  < 5000)
            {
                $gender = "Female";
            }
            else
            {
                $gender = "Male";
            }
            
            return $gender;
        }
        
        //convert date to MySQL date
        public function to_mysql_date($row_date)
        {
            
        }
        
        //generate a new file number
        public function new_file_no($user_id)
        {
            $file_no =   'CL' . $user_id;
            $rand_no = '';
            
            for($i = 1; $i <= 5; $i++)
            {
                $random_no = rand(1, 100000);
                $rand_no += $random_no;
            }
            
            return $file_no;
        }
    }
?>