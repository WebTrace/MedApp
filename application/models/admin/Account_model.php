<?Php
    class Account_model extends CI_Model
    {
        public function create_user_account_type($account_type_code, $user_id)
        {
            $data = array(
                'account_type_code'     => $account_type_code,
                'user_id'               => $user_id
            );
            
            $this->db->insert('', $data);
        }
        
        public function fetch_account_type()
        {
            //get account types
            $query = $this->db->get("account_type");
            
            $account_types =  $query->result_array();
            
            //get account features
            
            for($i = 0; $i < count($account_types); $i ++)
            {
                $this->db->from("account_type_standard_feature f");
                $this->db->join("standard_feature s", "f.standard_feature_code = s.standard_feature_code");
                $this->db->where("account_type_code", $account_types[$i]["account_type_code"]);
                $feature_query = $this->db->get()->result_array();
                
                $account_types[$i]["feature_details"] = $feature_query;
            }
            
            return $account_types;
        }
    }
?>