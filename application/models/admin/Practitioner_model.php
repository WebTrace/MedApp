<?Php
    class Practitioner_model extends CI_Model
    {
        /*
        *
        */
        public function create_practitioner($user_id, $hpcsa_no, $practice_no)
        {
            $practice_data = array(
                'user_id'           => $user_id,
                'hpcsa_no'          => $hpcsa_no,
                'practice_no'       => $practice_no,
            );
            
            //insert practice details
            $this->db->insert('practitioner', $practice_data);
        }
        
        /*
        *
        */
        public function create_practitioner_speciality($user_id, $speciality_code)
        {
            $practioner_speciality_data = array(
                'practitioner_id'   => $user_id,
                'speciality_code'   => $speciality_code
            );
            
            //insert practitioner speciality details
            $this->db->insert('practitioner_speciality', $practioner_speciality_data);
        }
        
        public function fetch_branch_practitioner($branch_id)
        {
            $this->db->from("user u");
            $this->db->join("user_branch ub", "u.user_id = ub.user_id");
            $this->db->join("user_role ur", "u.user_id = ur.user_id");
            $this->db->join("practitioner p", "u.user_id = p.user_id");
            $this->db->where("ub.branch_id", $branch_id);
            
            return $this->db->get()->result_array();
        }
        
        /*
        *fetch practice specality
        */
        public function fetch_speciality()
        {
            return $this->db->get('speciality')->result_array();
        }
    }
?>