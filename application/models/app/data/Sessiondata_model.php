<?Php
    class Sessiondata_model extends CI_Model
    {
        public function set_user_data($query)
        {
            $user_data = array(
                'USER_ID'           => $query->row(0)->user_id,
                'USER_ROLE'         => $query->row(0)->role_code,
                'ROLE_NAME'         => $query->row(0)->role_name,
                'USER_STATUS'       => $query->row(0)->status_code,
                'FNAME'             => $query->row(0)->first_name,
                'LNAME'             => $query->row(0)->last_name,
                'EMAIL'             => $query->row(0)->email_address,
                'USER_TITLE'        => $query->row(0)->title
            );

            $this->session->set_userdata($user_data);
        }
        
        public function set_manager_acc_data($manager_account_query)
        {
            $manager_data = array(
                'MANAGER_ID'                => $manager_account_query->row(0)->manager_id,
                'USER_ACCOUNT_TYPE_ID'      => $manager_account_query->row(0)->user_account_type_id
            );
            
            $this->session->set_userdata($manager_data);
        }
        
        public function set_branch_data($query)
        {
            $branch_data = array(
                'BRANCH_ID'         => $query->row(0)->branch_id,
                'BRANCH_STATUS'     => $query->row(0)->branch_status_code,
                'BRANCH_NAME'       => $query->row(0)->branch_name,
                'LOCATION'          => $query->row(0)->location,
                'PROVINCE'          => $query->row(0)->province,
                'CONTACT_NO'        => $query->row(0)->tel_no,
                'EMAIL_ADDR'        => $query->row(0)->email_address
            );
            
            $this->session->set_userdata($branch_data);
        }
        
        public function set_account_type_data()
        {
            //TODO: set global account type
        }
        
        public function account_trial_data($query)
        {
            $account_trial_data = array(
                'ACC_TYPE_CODE'     => $query->row(0)->account_type_code,
                'EXPIRY_DATE'       => $query->row(0)->expiry_date,
                'DATE_CREATED'      => $query->row(0)->acc_date_created,
                'IS_MANAGER'        => $query->row(0)->is_manager
            );
            
            $this->session->set_userdata($account_trial_data);
        }
        
        /*public function set_user_account_mode_data($query)
        {
            $branch_data = array(
                'ACC_TYPE_CODE' => $query->row(0)->branch_id,
                'REM_TRIAL_DAYS' => $query->row(0)->branch_id,
                'ACC_MODE' => $query->row(0)->branch_id,
                'ACC_TYPE_CODE' => $query->row(0)->branch_id,
            );
        }*/
        
        public function set_trial_expiry_days($remaining_days)
        {
            $account_expiry_days = array(
                "REM_DAYS"    => $remaining_days
            );
            
            $this->session->set_userdata($account_expiry_days);
        }
        
        public function set_user_account_mode_date($query)
        {
            $account_mode_data = array(
                'user_account_type_id'      => $query->row(0)->user_account_type_id,
                'account_code'              => $query->row(0)->account_type_code,
                'remaining_days'            => $query->row(0)->remaining_days,
                'account_mode_code'         => $query->row(0)->account_mode_code
            );
            
            $this->session->set_userdata($account_mode_data);
        }
        
        public function set_payment_data()
        {
            
        }
    }
?>