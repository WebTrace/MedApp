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
            $visiting_reason        = $this->input->post("visiting_reason");
            $pratitioner_id         = $this->input->post("appointment_practitioner");
            $appointment_date       = $this->input->post("");
            $appointment_type_code  = 2;
            
            $this->db->trans_start(); //START SQL TRANSACTION
            
            //create appointment type of wating room
            $this->waiting_room_data($patient_id, $visiting_reason);
            
            //get new added appointment id
            $appointment_id = $this->signup_model->get_new_added_id('appointment', 'appointment_id');
            
            //create appointment billing
            $this->create_appointment_billing($appointment_id, $billing_type_id);
            
            //create appointment type
            $this->create_appointment_type($appointment_id, $appointment_type_code);
            
            //assign appointment to a practitioner if pratitioner is selected
            if($pratitioner_id != 0)
            {
                $this->create_practitioner_appointment($pratitioner_id, $appointment_id);
            }
            
            $this->db->trans_complete(); //END SQL TRANSACTION
            
            return $this->db->trans_status();
        }
        
        public function create_appointment_schedule($appointment_id, $appointment_date)
        {
            $appointment_data = array(
                'appointment_id'    => $appointment_id,
                'appoitment_date'   => $appointment_date
            );
            
            $this->db->insert('appointment_schedulde', $appointment_data);
        }
        
        public function waiting_room_data($patient_id, $visiting_reason)
        {
            $visiting_reason_data = array(
                'patient_id'    => $patient_id,
                'reason'        => $visiting_reason
            );
            
            $this->db->insert('appointment', $visiting_reason_data);
        }
        
        public function create_practitioner_appointment($pratitioner_id, $appointment_id)
        {
            $practitioner_app_data = array(
                'practitioner_id' => $pratitioner_id,
                'appointment_id' => $appointment_id
            );
            
            $this->db->insert('practitioner_appointment', $practitioner_app_data);
        }
        
        public function create_appointment_billing($appointment_id, $patient_billing_type_id)
        {
            $data = array(
                'appointment_id'            => $appointment_id,
                'patient_billing_type_id'   => $patient_billing_type_id
            );
            
            $this->db->insert('appointment_billing', $data);
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
            $this->db->join('app_type t', 'a.appointment_id = t.appointment_id', 'RIGHT');
            $this->db->where('appointment_type_code', 2);
            
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