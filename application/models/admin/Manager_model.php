<?Php
    class Manager_model extends CI_Model
    {
        public function create_manager($user_id, $is_new_account)
        {
            $data = array(
                'user_id'               => $user_id,
                'is_new_account'        => $is_new_account
            );
            
            $this->db->insert("manager", $data);
        }
        
        public function create_branch_manager($manager_id, $branch_id)
        {
            $data = array(
                'manager_id'    => $manager_id,
                'branch_id'     => $branch_id
            );
            
            $this->db->insert("manager_manager", $data);
        }
        
        public function get_manager_id($user_id)
        {
            $this->db->where("user_id", $user_id);
            return $this->db->get("manager")->result_array();
        }
    }
?>