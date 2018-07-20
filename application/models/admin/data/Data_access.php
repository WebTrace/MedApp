<?Php
    class Data_access extends CI_model
    {
        //get all user
        public function fetch_user_across_branch($manager_id)
        {
            $sql = "select u.user_id, u.first_name, u.last_name, b.branch_name, r.role_name, s.status_name, e.email_address 
                    from user u join user_branch ub on u.user_id = ub.user_id join email_contact e 
                    on u.user_id = e.user_id join phone_contact p on u.user_id = p.user_id join user_role ur 
                    on u.user_id = ur.user_id join user_status us on u.user_id = us.user_id join status s on us.status_code = s.status_code
                    join role r on ur.role_code = r.role_code join branch b on ub.branch_id = b.branch_id 
                    where(ub.branch_id in(select branch_id 
                    from manager m join manager_branch mb on m.manager_id = mb.manager_id where(m.user_id = $manager_id))) order by u.date_created desc";
            
            return $this->db->query($sql)->result_array();
        }
        
        public function fetch_single_user($user_id, $manager_id)
        {
            $sql = "select * from user u join user_role ur on u.user_id = ur.user_id join role r on ur.role_code = r.role_code
                    join user_status us on u.user_id = us.user_id join status s on us.status_code = s.status_code
                    join login l on u.user_id = l.user_id join user_branch ub on u.user_id = ub.user_id
                    where(MD5(u.user_id) = '$user_id' and ub.branch_id in (select branch_id from manager m join 
                    manager_branch mb on m.manager_id = mb.manager_id where(m.user_id = $manager_id)))";
            
            return $this->db->query($sql)->result_array();
        }
        
        public function signin_user($username, $password)
        {
            $sql = "select * from user u join login l on u.user_id = l.user_id join user_role ur on u.user_id = ur.user_id
                    join user_status us on u.user_id = us.user_id join email_contact ec on u.user_id = ec.user_id
                    join role r on r.role_code = ur.role_code where(username = '$username' AND password = '$password')";
            
            return $this->db->query($sql);
        }
        
        public function count_login_attempt($login_id, $current_date)
        {
            $sql = "select login_attempt_id, count(*) AS today_login from login_attempt where(login_id = $login_id and login_date = '$current_date')";
            
            return $this->db->query($sql);
        }
        
        public function is_default_branch_exists($user_id)
        {
            $sql = "select count(*) as default_exists from default_branch where(user_id = $user_id)";
                
            return $this->db->query($sql);
        }
        
        public function search_branch_patient($id_number)
        {
            $sql = "select * from user where($id_number in(select id_number from 
                    user u join patient p on u.user_id = p.user_id join treatment_branch t ON p.patient_id = t.patient_id)";
            
            return $this->db->query($sql);
        }
        
        public function search_app_patient($search_param, $branch_id)
        {
            $sql = "select first_name, last_name, id_number, p.patient_id, tb.branch_id from user u join patient p 
                    on u.user_id = p.user_id join treatment_branch tb on p.patient_id = tb.patient_id 
                    where((first_name like '%$search_param%' or last_name like '%$search_param%' or id_number like '%$search_param%') and branch_id = $branch_id)";
            
            return $this->db->query($sql);
        }
        
        public function fetch_patient_wating_room($patient_id)
        {
            $sql = "select * from appointment a join app_type at on a.appointment_id = at.appointment_id
                    left join patient_appointment_status s on a.appointment_id = s.appointment_id
                    join appointment_status ap ON s.appointment_status_code = ap.appointment_status_code
                    join appointment_billing ab ON a.appointment_id = ab.appointment_id
                    join patient_billing_type pb ON ab.patient_billing_type_id = pb.patient_billing_type_id
                    where((s.appointment_status_code = 1 OR s.appointment_status_code = 2) and a.patient_id = $patient_id)";
            
            return $this->db->query($sql);
        }
        
        public function fetch_waiting_room($user_id)
        {
            $sql = "select u.user_id, p.patient_id, a.appointment_id, pr.practitioner_appointment_id, pr.practitioner_id, b.appointment_billing_id, b.patient_billing_type_id,
                    first_name, last_name, appointment_title, reason, at.appointment_type_code, t.name, s.appointment_status_code, i.name, bt.billing_type_code, bi.billing_name
                    from user u JOIN patient p ON u.user_id = p.user_id left join appointment a on p.patient_id = a.patient_id
                    join app_type at ON a.appointment_id = at.appointment_id JOIN appointment_type t on at.appointment_type_code = t.appointment_type_code
                    left join patient_appointment_status s on a.appointment_id = s.appointment_id left join appointment_status i ON s.appointment_status_code = i.appointment_status_code
                    left join practitioner_appointment pr on a.appointment_id = pr.appointment_id left join appointment_billing b ON a.appointment_id = b.appointment_id
                    left join patient_billing_type bt on b.patient_billing_type_id = bt.patient_billing_type_id left join billing_type bi ON bt.billing_type_code = bi.billing_type_code
                    where((s.appointment_status_code = 1 OR s.appointment_status_code = 3) and at.appointment_type_code = 2 AND u.user_id = $user_id)";
            
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
?>