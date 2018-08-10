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
            $this->db->from("manager m");
            $this->db->join("manager_branch mb", "m.manager_id = mb.manager_id", "right");
            $this->db->where("user_id", $user_id);

            return $this->db->get()->result_array();
        }
        
        public function fetch_manager_account($user_id)
        {
            $this->db->from("manager m");
            $this->db->join("user_account_type a", "m.manager_id = a.manager_id");
            $this->db->where("m.user_id", $user_id);
            
            return $this->db->get();
        }
    }
?>