<?Php
    class Data_access extends CI_model
    {
        //get all user
        public function fetch_user_across_branch($user_id)
        {
            $sql = "SELECT * FROM user AS u JOIN user_branch AS ub ON u.user_id = ub.user_id 
                    JOIN email_contact AS ec ON u.user_id = ec.user_id
                    JOIN phone_contact AS pc ON u.user_id = pc.user_id
                    JOIN user_role AS ur ON u.user_id = ur.user_id
                    JOIN role AS r ON r.role_code = ur.role_code
                    JOIN user_status AS us ON u.user_id = us.user_id
                    JOIN status AS s On s.status_code = us.status_code
                    WHERE(branch_id IN(SELECT branch_id 
                    FROM user_branch WHERE(user_id = $user_id)))";
            
            return $this->db->query($sql)->result_array();
        }
        
        public function signin_user($username, $password)
        {
            $sql = "SELECT * FROM user u JOIN user_role ur ON u.user_id = ur.user_id 
                    JOIN role r ON r.role_code = ur.role_code 
                    JOIN user_status us ON us.user_id = u.user_id
                    JOIN status s ON s.status_code = us.status_code
                    JOIN email_contact ec ON u.user_id = ec.user_id
                    JOIN user_branch ub ON u.user_id = ub.user_id
                    WHERE(u.username = '$username' AND u.password = '$password')";
            
            return $this->db->query($sql);
        }
    }
?>