<?Php
    class Diagnosis_model extends CI_Model
    {
        public function create_diagnosis()
        {
            //get treatment details
            $patient_id             = $this->input->post("patient_id");
            $practitioner_id        = $this->input->post("practitioner");
            $treatment_place        = $this->input->post("place");
            $treatment_date         = $this->input->post("treatment_date");
            $treatment_time         = $this->input->post("treatment_time");
            $appointment_id         = $this->input->post("waiting_app_id");
            $checkup_id             = "";
            $treatment_reference    = "D0000001";
            $check_date             = '2018-02-28';//$this->input->post("checkup_date");
            $has_next_checkup_date  = "YES";
            $is_checkup_appointment = "NO"; //if ahould come with checkup_date_id

            //get diagnosis details
            $icd_code               = $this->input->post("icd_code");
            $tariff_code            = $this->input->post("tariff_code");
            $description            = $this->input->post("description");
            $modifier_code          = $this->input->post("modifier_code");
            $quantity               = $this->input->post("quantity");
            $unit_price             = $this->input->post("price");
            $subtotal               = $this->input->post("sub_total");
            
            //get dispensing details
            $nappi_code             = $this->input->post("nappi_code");
            $item_no                = $this->input->post("item_code");
            $days_supply            = $this->input->post("days_supply");
            $cost                   = $this->input->post("cost");
            $dispense_fee           = $this->input->post("dispense_fee");
            $gross                  = $this->input->post("gross");
            
            //
            $this->db->trans_start(); //BEGIN SQL TRANSACTION
            
            //create treatment
            $this->treatment_details($patient_id, $treatment_reference, $treatment_place, $treatment_date, $treatment_time);
            
            //get new treatment id
            $treatment_id = $this->signup_model->get_new_added_id('treatment', 'treatment_id');
            
            //create treating practitioner
            $this->create_treating_practitioner($practitioner_id, $treatment_id);
            
            //create appointment treatment
            $this->create_appointment_treatment($appointment_id, $treatment_id);
            
            //get new appointment treatment id
            $appointment_treatment_id = $this->signup_model->get_new_added_id('appointment_treatment', 'appointment_treatment_id');
            
            //create checkup treatment
            if($has_next_checkup_date == "YES")
            {
                $this->create_checkup_date($appointment_treatment_id, $check_date);
            }
            
            if($is_checkup_appointment == "YES")
            {
                //get new checkup appointment id
                $chekup_id = $this->signup_model->get_new_added_id('checkup', 'checkup_id');
                $this->create_checkup_treatment($chekup_id, $treatment_id);
            }
            
            //create diagnosis
            $this->diagnosis_details($treatment_id, $icd_code, $tariff_code, $description, $modifier_code, $quantity, $unit_price, $subtotal);

            //create dispensing
            if(count($nappi_code) > 1)
            {
                $this->create_despensing($nappi_code, $item_no, $days_supply , $cost, $dispense_fee, $gross);
            }

            $this->db->trans_complete(); //END SQL TRANSACTION

            //return transaction status
            return $this->db->trans_status();
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
        
        public function treatment_details($patient_id, $treatment_reference, $treatment_place, $treatment_date, $treatment_time)
        {
            $treatment_data = array(
                'patient_id'            => $patient_id,
                'treatment_reference'   => $treatment_reference,
                'service_place'         => $treatment_place,
                'treatment_date'        => $treatment_date,
                'treatment_time'        => $treatment_time 
            );

            $this->db->insert('treatment', $treatment_data);
        }
        
        public function create_treating_practitioner($practitioner_id, $treatment_id)
        {
            $data = array(
                'practitioner_id'   => $practitioner_id,
                'treatment_id'      => $treatment_id
            );
            
            $this->db->insert('treating_practitioner', $data);
        }
        
        public function create_appointment_treatment($appointment_id, $treatment_id)
        {
            $data = array(
                'appointment_id'    => $appointment_id,
                'treatment_id'      => $treatment_id
            );

            $this->db->insert('appointment_treatment', $data);
        }
        
        public function create_checkup_date($appointment_treatment_id, $checkup_date)
        {
            $data = array(
                'appointment_treatment_id'  => $appointment_treatment_id,
                'checkup_date'                => $checkup_date
            );
            
            $this->db->insert('checkup_date', $data);
        }
        
        public function create_checkup_treatment($chekup_id, $treatment_id)
        {
            $data = array(
                'checkup_id'            => $chekup_id,
                'treatment_id'          => $treatment_id
            );
            
            $this->db->insert("checkup_treatment", $data);
        }

        public function diagnosis_details($treatment_id, $icd_code, $tariff_code, $description, $modifier_code, $quantity, $unit_price, $subtotal)
        {
            $number_of_medication = count($icd_code);
            
            for($i = 0; $i < $number_of_medication; $i ++)
            {
                $diagnosis_data = array(
                    'treatment_id'      => $treatment_id,
                    'ICD_code'          => $icd_code[$i],
                    'tariff_code'       => $tariff_code[$i],
                    'description'       => $description[$i],
                    'modifier_code'     => $modifier_code[$i],
                    'quantity'          => $quantity[$i],
                    'unit_price'        => $unit_price[$i],
                    'sub_total'         => $subtotal[$i]
                );
                
                $this->db->insert('medicine', $diagnosis_data);
            }
        }
        
        public function create_despensing($nappi_code, $item_no, $days_supply , $cost, $dispense_fee, $gross)
        {
            $number_of_dispensing = count($nappi_code);
            for($i = 1; $i < $number_of_dispensing; $i++)
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
        
        public function generate_treatment_reference()
        {
            $ref_length = 10;
            $ref_found = FALSE;
            $possible_chars = "123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            
            while(!$ref_found)
            {
                $unique_ref = "";
                $i = 0;
                
                while($i < $ref_length)
                {
                    $char = substr($possible_chars, mt_rand(0, strlen($possible_chars) - 1), 1);
                    $unique_ref .= $char;
                    $i++;
                }
                
                $old = "12312131";
                $ref_found = TRUE;
                if($unique_ref == $old)
                {
                    $ref_found = TRUE;
                }
            }
            
            return $unique_ref;
        }
    }
?>