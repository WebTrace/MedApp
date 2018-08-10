<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Appointment_model extends CI_Model 
    {
        public function create_appointment()
        {
            //appointment fields
            $patient_id             = $this->input->post("patient_id");
            $visiting_reason        = $this->input->post("visiting_reason");
            $appointment_type       = $this->input->post("appointment_type");
            
            if(!isset($appointment_type))
            {
                $appointment_type   = APPOINTMENT;
            }
            
            //appointment schedule fields
            $appointment_date       = $this->input->post("appointment_date");
            $appointment_time       = $this->input->post("app_time_slot");
            
            //service type fileds
            $service_type           = $this->input->post("branch_service");
            $service_type_id        = "";
            
            //appointment status fields
            $appointment_status     = APP_OPEN;
            
            //billing type fields
            $billing_type_id        = $this->input->post("billing");
            $billing_code           = 2;
            
            //practitioner appointment fields
            $pratitioner_id         = $this->input->post("provider");
            
            //medical billing fileds
            $medical_aid_id         = $this->input->post("medical_aid_scheme");
            
            $this->db->trans_start(); //START SQL TRANSACTION
            
            //create appointment
            $this->appointment_data($patient_id, $visiting_reason);
            
            //get new added appointment id
            $appointment_id = $this->signup_model->get_new_added_id('appointment', 'appointment_id');
            
            //create appointment status
            $this->create_appointment_status($appointment_id, $appointment_status);
            
            //create appointment billing
            $this->create_appointment_billing($appointment_id, $billing_type_id);
            
            //create appointment schedule
            if($appointment_type == 1)
            {
                $this->create_appointment_schedule($appointment_id, $appointment_date, $appointment_time);
            }
            
            //create appointment type
            $this->create_appointment_type($appointment_id, $appointment_type);
            
            //assign appointment to a practitioner if pratitioner is selected
            $this->create_practitioner_appointment($pratitioner_id, $appointment_id);
            
            //create appointment service
            if($service_type != ANY_SERVICE)
            {
                $this->create_appointment_service($service_type_id, $appointment_id);
            }
            
            //create medical aid billing
            if($billing_code == 1)
            {
                //get new added appointment billing id
                $appointment_billing_id = $this->signup_model->get_new_added_id('appointment_billing', 'appointment_billing_id');
                
                //create medical aid billing
                $this->create_medical_aid_billing($appointment_billing_id, $medical_aid_id);
            }
            
            $this->db->trans_complete(); //END SQL TRANSACTION
            
            return $this->db->trans_status();
        }
        
        public function create_reffer_patient()
        {
            $practitioner_app_id        = $this->input->post('practitioner_app_id');
            $practitioner_id            = $this->input->post('practitioner_id');
            $referring_reason           = $this->input->post('referring_reason');
            $appointment_id             = '';
                
            $this->db->trans_start(); //START SQL TRANSACTION
            
            //create appointment refer
            $this->create_reffer_patient_data($practitioner_app_id, $practitioner_id, $referring_reason);
            
            //update appointment status
            $this->update_appointment_status(3);
            
            $this->db->trans_complete(); //END SQL TRANSACTION
            
            return $this->db->trans_status();
        }
        
        public function create_checkup()
        {
            $check_date_id      = $this->input->post("checkup_date_id");
            $checkup_date       = $this->input->post("checkup_date");
            $billing_type       = $this->input->post("patient_billing_type");
            $today              = date("Y-m-d");
            $days_due           = date_diff($today, $checkup_date);
            
            $this->db->trans_start(); //START TRANSACTION
            
            //create checkup
            $this->db->checkup_data($check_date_id, $days_due);
            
            //get new checkup id
            $checkup_id = $this->signup_model->get_new_added_id('checkup', 'checkup_id');
            
            //create checkup billing
            $this->db->create_checkup_billing($checkup_id, $patient_billing_type_id);
            
            $this->db->trans_complete(); //END TRANSACTION
            
            return $this->db->trans_status(); //RETURN TRANSACTION STATUS
        }
        
        public function fetch_appointment()
        {
            
        }
        
        public function fetch_sigle_appointment($appointment_id)
        {
            
        }
        
        public function fetch_practitioner_appointment($practitioner_id, $branch_id, $status)
        {
            $sql = "select * from user u join patient p on u.user_id = p.user_id join appointment a on p.patient_id = a.patient_id join appointment_schedule sc on a.appointment_id = sc.appointment_id
                    join practitioner_appointment pa on a.appointment_id = pa.appointment_id join patient_appointment_status ps on ps.appointment_id = a.appointment_id
                    where(pa.practitioner_id = $practitioner_id and a.patient_id in(select patient_id from treatment_branch where(branch_id = $branch_id)) and ps.appointment_status_code = $status)";
            
            return $this->db->query($sql);
        }
        
        public function fetch_waiting_room()
        {
            $this->db->from('user u');
            $this->db->join('patient p', 'u.user_id = p.user_id');
            $this->db->join('appointment a', 'p.patient_id = a.patient_id');
            $this->db->join('practitioner_appointment pa', 'a.appointment_id = pa.appointment_id', 'RIGHT');
            $this->db->join('app_type t', 'a.appointment_id = t.appointment_id', 'RIGHT');
            $this->db->where('appointment_type_code', 2);
            
            return $this->db->get()->result_array();
            
            $user_id = $this->session->userdata("USER_ID");
            
            return $this->data_access->fetch_waiting_room($user_id)->result_array();
        }
        
        public function fetch_single_waiting_room($waiting_room_id, $is_ajax)
        {
            $this->db->from("appointment a");
            $this->db->join("patient p", "a.patient_id = p.patient_id");
            $this->db->join("user u", "p.user_id = u.user_id");
            $this->db->join("app_type at", "a.appointment_id = at.appointment_id");
            $this->db->where("a.appointment_id = $waiting_room_id");

            if($is_ajax == FALSE)
            {
                return $this->db->get()->result_array();
            }
            else
            {
                echo json_encode($this->db->get()->result_array());
            }
        }
        
        public function fetch_patient_wating_room($patient_id, $is_ajax)
        {
            $data = $this->data_access->fetch_patient_wating_room($patient_id)->result_array();
            
            if($is_ajax == FALSE)
            {
                return $data;
            }
            else
            {
                echo json_encode($data);
            }
        }
        
        public function create_appointment_()
        {
            $this->create_appointment_schedule($appointment_id, $appointment_date, $appointment_time);
        }
        
        public function update_waiting_room()
        {
            $data = array(
                
            );
        }
        
        public function remove_waiting_room()
        {
            $data = array(
                
            );
        }
        
        public function appointment_data($patient_id, $visiting_reason)
        {
            $visiting_reason_data = array(
                'patient_id'            => $patient_id,
                'reason'                => $visiting_reason
            );
            
            $this->db->insert('appointment', $visiting_reason_data);
        }
        
        public function create_appointment_schedule($appointment_id, $appointment_date, $appointment_time)
        {
            $appointment_data = array(
                'appointment_id'        => $appointment_id,
                'appointment_date'      => $appointment_date,
                'appointment_time'      => $appointment_time
            );
            
            $this->db->insert('appointment_schedule', $appointment_data);
        }
        
        public function create_practitioner_appointment($pratitioner_id, $appointment_id)
        {
            $practitioner_app_data = array(
                'practitioner_id'   => $pratitioner_id,
                'appointment_id'    => $appointment_id
            );
            
            $this->db->insert('practitioner_appointment', $practitioner_app_data);
        }
        
        public function create_reffer_patient_data($practitioner_app_id, $practitioner_id, $referring_reason)
        {
            $data = array(
                'practitioner_appointment_id'  => $practitioner_app_id,
                'referred_practitioner'        => $practitioner_id,
                'referring_reason'             => $referring_reason
            );

            $this->db->insert('appointment_referrer', $data);
        }
        
        public function create_appointment_status($appointment_id, $appointment_status)
        {
            $data = array(
                'appointment_id'            => $appointment_id,
                'appointment_status_code'   => $appointment_status
            );
            
            $this->db->insert('patient_appointment_status', $data);
        }
        
        public function update_appointment_status($appointment_status_code)
        {
            $updata_data = array(
                'appointment_status_code'   => $appointment_status_code
            );
            
            $this->db->where('appointment_id', $this->input->post(''));
            $this->db->update('patient_appointment_status', $updata_data);
        }
        
        public function create_appointment_billing($appointment_id, $patient_billing_type_id)
        {
            $data = array(
                'appointment_id'            => $appointment_id,
                'patient_billing_type_id'   => $patient_billing_type_id
            );
            
            $this->db->insert('appointment_billing', $data);
        }
        
        public function create_medical_aid_billing($appointment_billing_id, $medical_aid_id)
        {
            $data = array(
                'medical_aid_id'                => $medical_aid_id,
                'appointment_billing_id'        => $appointment_billing_id
            );
            
            $this->db->insert('medical_aid_billing', $data);
        }
        
        public function create_appointment_type($appointment_id, $appointment_type_code)
        {
            $app_type_data = array(
                'appointment_type_code'     => $appointment_type_code,
                'appointment_id'            => $appointment_id
            );
            
            $this->db->insert('app_type', $app_type_data);
        }
        
        public function create_appointment_service($user_branch_service_type_id, $appointment_id)
        {
            $data = array(
                'user_branch_service_type_id'   => $user_branch_service_type_id,
                'appointment_id'                => $appointment_id
            );
            
            $this->db->insert('appointment_service', $data);
        }
        
        public function checkup_data($check_date_id, $days_due)
        {
            $data = array(
                'checkup_date_id'       => $check_date_id,
                'days_due'              => $days_due
            );
            
            return $this->db->insert("checkup", $data);
        }
        
        public function create_checkup_billing($checkup_id, $patient_billing_type_id)
        {
            $data = array(
                'checkup_id'                => $checkup_id,
                'patient_billing_type_id'   => $patient_billing_type_id
            );
            
            $this->db->insert("checkip_billing", $data);
        }
        
        public function create_patient_checkup_status($checkup_date_id)
        {
            $data = array(
                'checkup_date_id'        => $checkup_date_id
            );
            
            $this->db->insert('patient_appointment_status', $data);
        }
        
        public function fetch_checkup_appointment($patient_id)
        {
            $this->db->from('patient p');
            $this->db->join('appointment a', 'p.patient_id = a.patient_id');
            $this->db->join('appointment_treatment at', 'a.appointment_id = at.appointment_id');
            $this->db->join('checkup_date cd', 'at.appointment_treatment_id = cd.appointment_treatment_id');
            $this->db->where('p.patient_id', $patient_id);
            
            return $this->db->get()->result_array();
        }
    }
?>