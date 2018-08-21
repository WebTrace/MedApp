<?Php
    class Practitioner_model extends CI_Model
    {
        public function create_practitioner($user_id, $practice_no)
        {
            $practice_data = array(
                'user_id'           => $user_id,
                'practice_no'       => $practice_no
            );
            
            //insert practice details
            $this->db->insert('practitioner', $practice_data);
        }
        
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
        
        public function fetch_practitioner_service($branch_id, $service_code)
        {
            $this->db->from("user_branch_service bs");
            $this->db->join("practitioner_service p", "bs.user_branch_service_id = p.user_branch_service_id");
            $this->db->join("practitioner pr", "p.practitioner_id = pr.practitioner_id");
            $this->db->join("user u", "pr.user_id = u.user_id");
            $this->db->where("bs.branch_id", $branch_id);
            
            if($service_code != "Any")
            {
                $this->db->where("bs.branch_service_code", $service_code);
            }
            
           return $this->db->get()->result_array();
        }
        
        public function fetch_speciality()
        {
            return $this->db->get('speciality')->result_array();
        }
        
        public function fetch_practitioner_id($user_id)
        {
            $this->db->where('user_id', $user_id);
            return $this->db->get('practitioner')->row(0)->practitioner_id;
        }
    }
?>