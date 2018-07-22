<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Appointment_model extends CI_Model 
    {
        public function create_appointment()
        {
            $this->create_appointment_schedule($appointment_id, $appointment_date);
        }
        
        public function create_waiting_room()
        {
            $patient_id             = $this->input->post("waiting_room_patient");
            $billing_type_id        = $this->input->post("appointment_billing_id");
            $billing_code           = $this->input->post("patient_billing_code");
            $visiting_reason        = $this->input->post("visiting_reason");
            $appointment_title      = $this->input->post("appointment_title");
            $pratitioner_id         = $this->input->post("appointment_practitioner");
            $appointment_date       = $this->input->post("");
            $medical_aid_id         = $this->input->post("medical_aid_scheme");
            $appointment_type_code  = 2;
            
            $this->db->trans_start(); //START SQL TRANSACTION
            
            //create appointment type of wating room
            $this->waiting_room_data($patient_id, $visiting_reason, $appointment_title);
            
            //get new added appointment id
            $appointment_id = $this->signup_model->get_new_added_id('appointment', 'appointment_id');
            
            //create appointment status
            $this->create_appointment_status($appointment_id);
            
            //create appointment billing
            $this->create_appointment_billing($appointment_id, $billing_type_id);
            
            //create medical aid billing
            if($billing_code == 1)
            {
                //get new added appointment billing id
                $appointment_billing_id = $this->signup_model->get_new_added_id('appointment_billing', 'appointment_billing_id');
                
                //create medical aid billing
                $this->create_medical_aid_billing($appointment_billing_id, $medical_aid_id);
            }
            
            //create appointment type
            $this->create_appointment_type($appointment_id, $appointment_type_code);
            
            //assign appointment to a practitioner if pratitioner is selected
            $this->create_practitioner_appointment($pratitioner_id, $appointment_id);
            
            $this->db->trans_complete(); //END SQL TRANSACTION
            
            return $this->db->trans_status();
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
        
        public function create_appointment_schedule($appointment_id, $appointment_date)
        {
            $appointment_data = array(
                'appointment_id'    => $appointment_id,
                'appoitment_date'   => $appointment_date
            );
            
            $this->db->insert('appointment_schedulde', $appointment_data);
        }
        
        public function waiting_room_data($patient_id, $visiting_reason, $appointment_title)
        {
            $visiting_reason_data = array(
                'patient_id'            => $patient_id,
                'reason'                => $visiting_reason,
                'appointment_title'     => $appointment_title
            );
            
            $this->db->insert('appointment', $visiting_reason_data);
        }
        
        public function create_practitioner_appointment($pratitioner_id, $appointment_id)
        {
            $practitioner_app_data = array(
                'practitioner_id'   => $pratitioner_id,
                'appointment_id'    => $appointment_id
            );
            
            $this->db->insert('practitioner_appointment', $practitioner_app_data);
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
        
        public function create_reffer_patient_data($practitioner_app_id, $practitioner_id, $referring_reason)
        {
            $data = array(
                'practitioner_appointment_id'  => $practitioner_app_id,
                'referred_practitioner'        => $practitioner_id,
                'referring_reason'             => $referring_reason
            );

            $this->db->insert('appointment_referrer', $data);
        }
        
        public function create_appointment_status($appointment_id)
        {
            $data = array(
                'appointment_id'    => $appointment_id
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
            /*$this->db->from("appointment a");
            $this->db->join("app_type at", "a.appointment_id = at.appointment_id");
            $this->db->join("patient_appointment_status s", "a.appointment_id = s.appointment_id", "LEFT");
            $this->db->join("appointment_status ap", "s.appointment_status_code = ap.appointment_status_code");
            $this->db->where("s.appointment_status_code", 1);
            $this->db->or_where("(s.appointment_status_code", "2)");
            $this->db->where("a.patient_id", $patient_id);*/
            
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
        
        
        
        
        
        
        
        
        
        
        
        /*Read the data from DB */
        Public function getAppointments()
        {
           $sql = "SELECT * FROM events WHERE events.start BETWEEN ? AND ? ORDER BY events.start ASC";
           return $this->db->query($sql, array($_GET['start'], $_GET['end']))->result();
        }

        /*Create new events */
        Public function addAppointment()
        {
           $sql = "INSERT INTO events (title,events.start,events.end,description, color) VALUES (?,?,?,?,?)";
           $this->db->query($sql, array($_POST['title'], $_POST['start'],$_POST['end'], $_POST['description'], $_POST['color']));
            return ($this->db->affected_rows()!=1)?false:true;
        }

        /*Update  event */
        Public function updateAppointment()
        {
            $sql = "UPDATE events SET title = ?, description = ?, color = ? WHERE id = ?";
            $this->db->query($sql, array($_POST['title'],$_POST['description'], $_POST['color'], $_POST['id']));
            return ($this->db->affected_rows()!=1)?false:true;
        }
	   /*Delete event */

        Public function deleteAppointment()
        {

        $sql = "DELETE FROM events WHERE id = ?";
        $this->db->query($sql, array($_GET['id']));
            return ($this->db->affected_rows()!=1)?false:true;
        }

        /*Update  event */
        Public function dragUpdateAppointment()
        {
            //$date=date('Y-m-d h:i:s',strtotime($_POST['date']));
			$sql = "UPDATE events SET  events.start = ? ,events.end = ?  WHERE id = ?";
			$this->db->query($sql, array($_POST['start'],$_POST['end'], $_POST['id']));
            return ($this->db->affected_rows()!=1)?false:true;
        }
    }
?>