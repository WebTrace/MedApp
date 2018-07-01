<?Php
    class Account_model extends CI_Model
    {
        public function create_user_account_type($user_id)
        {
            $account_type_code      = $this->session->userdata("ACC_TYPE_CODE");;
            $user_id                = $user_id;
            $date_created           = date('Y-m-d');
            $expiry_date            = date('Y-m-d', strtotime($date_created . ' + ' . (TRIAL_DAYS + 1) . ' days'));
            $remaining_days         = TRIAL_DAYS;
            $account_mode_code      = ACC_MODE_TRIAL;
            
            $this->db->trans_start(); //BEGIN SQL TRANSACTION
            
            //create user account
            $this->user_account_data($account_type_code, $user_id);
            
            //get new user account id
            $user_account_type_id = $this->signup_model->get_new_added_id("user_account_type", "user_account_type_id");
            
            //create account trial
            $this->create_trial_account($user_account_type_id, $date_created, $expiry_date, $remaining_days);
            
            //create account mode
            $this->create_account_mode($account_mode_code, $user_account_type_id);
            
            $this->db->trans_complete(); //BEGIN SQL TRANSACTION
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
        
        public function fetch_user_account_mode($user_id)
        {
            $this->db->from("user_account_type ua");
            $this->db->join("user_account_trial ut", "ua.user_account_type_id = ut.user_account_type_id");
            $this->db->join("user_account_type_mode um", "ua.user_account_type_id = um.user_account_type_id");
            $this->db->where("user_id", $user_id);
            
            return $this->db->get()->result_array();
        }
        
        public function create_account_payment()
        {
            
        }
        
        public function user_account_data($account_type_code, $user_id)
        {
            $data = array(
                'account_type_code'     => $account_type_code,
                'user_id'               => $user_id
            );

            $this->db->insert('user_account_type', $data);
        }
        
        public function create_trial_account($user_account_id, $date_created, $expiry_date, $remaining_days)
        {
            $data = array(
                'user_account_id'   => $user_account_id,
                'date_created'      => $date_created,
                'expiry_data'       => $expiry_date,
                'remaining_days'    => $remaining_days
            );
        }
        
        public function create_account_mode($account_mode_code, $user_account_type_id)
        {
            $data = array(
                'account_mode_code'         => $account_mode_code,
                'user_account_type_id'      => $user_account_type_id
            );
            
            $this->db->insert('user_account_type_mode', $data);
        }
        
        public function account_payment_data($user_account_type_id, $total_amount)
        {
            $data = array(
                'user_account_type_id'  => $user_account_type_id,
                'total_amount'          => $total_amount
            );
            
            $this->db->insert('account_payment', $data);
        }
    }
?>