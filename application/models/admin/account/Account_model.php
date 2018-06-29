<?Php
    class Account_model extends CI_Model
    {
        public function create_user_account_type($account_type_code, $user_id)
        {
            $data = array(
                'account_type_code'     => $account_type_code,
                'user_id'               => $user_id
            );
            
            $this->db->insert('user_account_type', $data);
        }
        
        public function fetch_account_type()
        {
            return $this->db->get('account_type')->result_array();
        }
        
        public function fetch_account_type_details()
        {
            //get account types
            $query = $this->db->get("account_type");
            $account_types =  $query->result_array();
            
            //get account features
            for($i = 0; $i < count($account_types); $i ++)
            {
                $this->db->from("account_feature f");
                $this->db->join("standard_feature s", "f.standard_feature_code = s.standard_feature_code", "left");
                $this->db->join("special_feature sf", "f.account_feature_id = sf.account_feature_id", "left");
                $this->db->where("account_type_code", $account_types[$i]["account_type_code"]);
                
                $feature_query = $this->db->get()->result_array();
                
                $account_types[$i]["feature_details"] = $feature_query;
                $account_types[$i]["addons"] = $this->get_account_addon($account_types[$i]["account_type_code"]);
            }
            
            return $account_types;
        }
        
        public function get_account_addon($account_type_code)
        {
            $this->db->from("account_type t");
            $this->db->join("account_type_addon d", "t.account_type_code = d.account_type_code");
            $this->db->join("add_on o", "d.addon_id = o.add_on_id");
            $this->db->join("standard_feature sf", "o.standard_feature_code = sf.standard_feature_code");
            $this->db->where("t.account_type_code", $account_type_code);
            
            return $this->db->get()->result_array();
        }
    }
?>