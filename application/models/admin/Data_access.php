<?Php
    class Data_access extends CI_model
    {
        //get all user
        public function fetch_user_across_branch($user_id)
        {
            $sql = "select * from user u join user_branch ub on u.user_id = ub.user_id join email_contact e 
                    on u.user_id = e.user_id join phone_contact p on u.user_id = p.user_id join user_role ur 
                    on u.user_id = ur.user_id join user_status us on u.user_id = us.user_id join status s on us.status_code = s.status_code
                    join role r on ur.role_code = r.role_code join branch b on ub.branch_id = b.branch_id 
                    where(ub.branch_id in(select branch_id 
                    from manager m join manager_branch mb on m.manager_id = mb.manager_id where(m.user_id = $user_id)) and ur.role_code <> 4)";
            
            return $this->db->query($sql)->result_array();
        }
        
        public function signin_user($username, $password)
        {
            $sql = "SELECT * FROM user u JOIN login l ON u.user_id = l.user_id JOIN user_role ur ON u.user_id = ur.user_id
                    JOIN user_status us ON u.user_id = us.user_id JOIN email_contact ec ON u.user_id = ec.user_id
                    JOIN role r ON r.role_code = ur.role_code WHERE(username = '$username' AND password = '$password')";
            
            return $this->db->query($sql);
        }
        
        public function count_login_attempt($login_id, $current_date)
        {
            $sql = "SELECT login_attempt_id, COUNT(*) AS today_login FROM login_attempt WHERE(login_id = $login_id AND login_date = '$current_date')";
            
            return $this->db->query($sql);
        }
        
        public function is_default_branch_exists($user)
        {
            $sql = "select count(*) as default_exists from default_branch where(user_id = $user)";
                
            return $this->db->query($sql);
        }
        
        public function search_branch_patient($id_number)
        {
            $sql = "SELECT * FROM user WHERE($id_number IN(SELECT id_number FROM 
                    user u JOIN patient p ON u.user_id = p.user_id JOIN treatment_branch t ON p.patient_id = t.patient_id)";
            
            return $this->db->query($sql);
        }
        
        public function fetch_patient_wating_room($patient_id)
        {
            $sql = "SELECT * FROM appointment a JOIN app_type at ON a.appointment_id = at.appointment_id
                    LEFT JOIN patient_appointment_status s ON a.appointment_id = s.appointment_id
                    JOIN appointment_status ap ON s.appointment_status_code = ap.appointment_status_code
                    JOIN appointment_billing ab ON a.appointment_id = ab.appointment_id
                    JOIN patient_billing_type pb ON ab.patient_billing_type_id = pb.patient_billing_type_id
                    WHERE((s.appointment_status_code = 1 OR s.appointment_status_code = 2) AND a.patient_id = $patient_id)";
            
            return $this->db->query($sql);
        }
        
        public function fetch_waiting_room($user_id)
        {
            $sql = "SELECT u.user_id, p.patient_id, a.appointment_id, pr.practitioner_appointment_id, pr.practitioner_id, b.appointment_billing_id, b.patient_billing_type_id,
                    first_name, last_name, appointment_title, reason, at.appointment_type_code, t.name, s.appointment_status_code, i.name, bt.billing_type_code, bi.billing_name
                    FROM user u JOIN patient p ON u.user_id = p.user_id LEFT JOIN appointment a ON p.patient_id = a.patient_id
                    JOIN app_type at ON a.appointment_id = at.appointment_id JOIN appointment_type t ON at.appointment_type_code = t.appointment_type_code
                    LEFT JOIN patient_appointment_status s ON a.appointment_id = s.appointment_id LEFT JOIN appointment_status i ON s.appointment_status_code = i.appointment_status_code
                    LEFT JOIN practitioner_appointment pr ON a.appointment_id = pr.appointment_id LEFT JOIN appointment_billing b ON a.appointment_id = b.appointment_id
                    LEFT JOIN patient_billing_type bt ON b.patient_billing_type_id = bt.patient_billing_type_id LEFT JOIN billing_type bi ON bt.billing_type_code = bi.billing_type_code
                    WHERE((s.appointment_status_code = 1 OR s.appointment_status_code = 3) AND at.appointment_type_code = 2 AND u.user_id = $user_id)";
            
            return $this->db->query($sql);
        }
        
        public function fetch_checkup_appointment($patient_id)
        {
            $sql = "SELECT * FROM patient p JOIN appointment a ON p.patient_id = a.patient_id
                    JOIN appointment_treatment t ON a.appointment_id = t.appointment_id
                    JOIN treatment m ON m.treatment_id = t.treatment_id
                    JOIN checkup_date d ON d.appointment_treatment_id = t.appointment_treatment_id
                    JOIN patient_checkup_status cs ON cs.checkup_date_id = d.checkup_date_id
                    WHERE(p.patient_id = $patient_id AND (cs.checkup_status_code = 1 OR cs.checkup_status_code = 2))";
            
            return $this->db->query($sql)->result_array();
        }
        
        public function is_patient_waiting($id_number)
        {
            $sql = "select COUNT(*) AS is_patient_waiting from user u JOIN patient p ON u.user_id = p.user_id JOIN appointment a ON p.patient_id = a.patient_id
                    JOIN app_type at ON a.appointment_id = at.appointment_id
                    JOIN patient_appointment_status pa ON a.appointment_id = pa.appointment_id
                    WHERE((pa.appointment_status_code = 1 OR pa.appointment_status_code = 2) AND at.appointment_type_code = 2 AND u.id_number = $id_number)";
            
            return $this->db->query($sql)->result_array();
        }
        
        public function fetch_default_branch($user_id)
        {
            $sql = "SELECT * FROM user u JOIN default_branch db ON u.user_id = db.user_id
                    JOIN branch b ON b.branch_id = db.branch_id JOIN user_branch_status bs ON b.branch_id = bs.branch_id
                    JOIN branch_status s ON bs.branch_status_code = s.branch_status_code
                    WHERE(u.user_id = $user_id AND db.is_default = 'Yes')";
            
            return $this->db->query($sql);
        }
    }
    /*Login pre-requisite
    -Check username and password
    -Check login attempts
    -Swap between defaults branches
    -Check if user is not block through exceeded login attempts
    -Check user status
    -Check user role
    -Check if branch is not in arreas
    -Check default branch
    */
?>