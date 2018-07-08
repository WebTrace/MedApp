<?Php
    class Addon extends CI_Controller
    {
        public function add_account_branch()
        {
            $manager_id = $this->session->userdata("MANAGER_ID");
            $branch_id = $this->session->userdata("BRANCH_ID");
            
            if($this->addon_model->count_account_branches($manager_id)->num_rows() > 0)
            {
                if(isset($_SESSION["ACC_TYPE_CODE"]))
                {
                    $acc_type_code = $this->session->userdata("ACC_TYPE_CODE");
                    $avail_brance_capacity = $this->addon_model->calc_addon_capacity($manager_id, $branch_id);
                    
                    if($acc_type_code == BASIC_ACC)
                    {
                        echo json_encode($this->addon_model->fetch_account_addon_details($manager_id, BSC_BRANCH_CAPACITY, $avail_brance_capacity));
                    }
                    else if ($acc_type_code == STANDARD_ACC)
                    {
                        echo json_encode($this->addon_model->fetch_account_addon_details($manager_id, STD_BRANCH_CAPACITY, $avail_brance_capacity));
                    }
                    else if($acc_type_code == PROFESSIONAL_ACC)
                    {
                        echo json_encode($this->addon_model->fetch_account_addon_details($manager_id, PRO_BRANCH_CAPACTIY, $avail_brance_capacity));
                    }
                    else
                    {
                        //TODO: error
                    }
                    
                    //echo json
                }
            }
            else
            {
                //TODO: error
            }
        }
        
        public function addon_payment()
        {
            
        }
    }
?>