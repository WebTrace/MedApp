<?Php
    class Addon extends CI_Controller
    {
        public function add_account_branch()
        {
            $manager_id = $this->session->userdata("MANAGER_ID");
            $branch_id = $this->session->userdata("BRANCH_ID");
            
            if($this->addon_model->count_account_branches($manager_id)->num_rows() > 0)
            {
                $num_account_branch = $this->addon_model->count_account_branches($manager_id)->row(0)->num_mngr_branches;
                
                if(isset($_SESSION["ACC_TYPE_CODE"]))
                {
                    $acc_type_code = $this->session->userdata("ACC_TYPE_CODE");
                    
                    if($acc_type_code == BASIC_ACC)
                    {
                        if($num_account_branch > 3)
                        {
                            //TODO: if account type is equals to Basic, Standard Professional
                            echo $num_account_branch;
                        }
                        else
                        {
                            //TODO: here
                            echo "$acc_type_code Basic : " . $this->session->userdata("ACC_TYPE_CODE");
                        }
                    }
                    else if ($acc_type_code == STANDARD_ACC)
                    {
                        if($num_account_branch > 3)
                        {
                            //TODO: if account type is equals to Basic, Standard Professional
                            echo $num_account_branch;
                        }
                        else
                        {
                            //TODO: here
                            echo "Standard";
                        }
                    }
                    else if($acc_type_code == PROFESSIONAL_ACC)
                    {
                        $avail_brance_capacity = $this->addon_model->calc_addon_capacity($manager_id, $branch_id);
                        
                        //TODO: if account mode is trial, reset avail_brance_capacity to 2;
                        
                        if($num_account_branch >= $avail_brance_capacity)
                        {
                            //get branch addon pricing
                            $addon = $this->addon_model->fetch_branch_addon()->result_array();
                            
                            $price          = $addon[0]["price"];
                            $item_name      = $addon[0]["feature_name"];
                            $vat            = $addon[0]["price"] * VAT;
                            $total_price    = $price + $vat;
                            
                            $addon_data = array(
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
                            $addon_data = array(
                                'num_account_branch' => true
                            );
                        }
                        
                        echo json_encode($addon_data);
                    }
                    else
                    {
                        //TODO: error
                    }
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