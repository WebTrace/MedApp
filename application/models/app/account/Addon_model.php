<?Php
    class Addon_model extends CI_Model
    {
        public function fetch_user_addon()
        {
            
        }
        
        public function fetch_branch_addon()
        {
            $this->db->from("add_on a");
            $this->db->join("standard_feature s", "s.standard_feature_code = a.standard_feature_code");
            $this->db->where("a.standard_feature_code", 2);
            
            return $this->db->get();
        }
        
        public function count_branch_users($branch_id)
        {
            return $this->branch_model->count_branch_users($branch_id);
        }
        
        public function count_account_branches($manager_id)
        {
            return $this->branch_model->count_account_branches($manager_id);
        }
        
        public function fetch_acc_branch_addon($branch_id)
        {
            return $this->db->query("select quantity from user_branch_addon a join add_on d on d.add_on_id = a.add_on_id where(branch_id = $branch_id and d.standard_feature_code = 2)");
        }
        
        public function fetch_acc_user_addon($branch_id)
        {
            return $this->db->query("select quantity from user_branch_addon a join add_on d on d.add_on_id = a.add_on_id where(branch_id = $branch_id and d.standard_feature_code = 1)");
        }
        
        public function calc_addon_capacity($manager_id, $branch_id)
        {
            if($this->count_account_branches($manager_id)->num_rows() > 0)
            {
                $num_addon_branches = 0;
                
                if($this->fetch_acc_branch_addon($branch_id)->num_rows() > 0)
                {
                    $num_addon_branches = $this->fetch_acc_branch_addon($branch_id)->result_array()[0]["quantity"];
                }
                
                $num_branches = $this->count_account_branches($manager_id)->row(0)->num_mngr_branches;

                return ($num_branches + $num_addon_branches);
            }
            else
            {
                return "count branches didnt run";
            }
        }
        
        public function fetch_account_addon_details($manager_id, $branch_capacity, $avail_brance_capacity)
        {
            $num_account_branch = $this->count_account_branches($manager_id)->row(0)->num_mngr_branches;
            
            if($num_account_branch >= $branch_capacity || $num_account_branch >= $avail_brance_capacity)
            {
                //get branch addon pricing
                $addon = $this->fetch_branch_addon()->result_array();
                
                if($branch_capacity == BSC_BRANCH_CAPACITY)
                {
                    $allow_branch = false;
                }
                else if($branch_capacity == STD_BRANCH_CAPACITY)
                {
                    $allow_branch = false;
                }
                else
                {
                    $allow_branch = true;
                }

                $price          = $addon[0]["price"];
                $item_name      = $addon[0]["feature_name"];
                $vat            = $addon[0]["price"] * VAT;
                $total_price    = $price + $vat;

                $addon_data = array(
                    'allow_branch' => $allow_branch,
                    'num_account_branch' => false,
                    'branch_addon' => array(
                        'price'         => $price,
                        'item_name'     => $item_name,
                        'vat'           => $vat,
                        'total_price'   => $total_price
                    )
                );
            }
            else
            {
                $addon_data = array('num_account_branch' => true);
            }

            return $addon_data;
        }
    }
?>