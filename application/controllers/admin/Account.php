<?Php
    class Account extends MY_Controller
    {
        public function account_type($account_type = null)
        {
            
        }
        
        /*public function upgrade_account()
        {
            $data['account_types'] = $this->account_model->fetch_account_type();
            
            $this->load->view("admin/templates/header");
            $this->load->view("admin/account/upgrade_account", $data);
            $this->load->view("admin/templates/footer");
        }*/
        
        public function upgrade_account()
        {
            $data['account_types'] = $this->account_model->fetch_account_type();
            $data['title'] = "Upgrade account";
            
            $this->load->view("admin/templates/auth-header", $data);
            $this->load->view("admin/account/upgrade_account");
            $this->load->view("admin/templates/auth-footer");
        }
        
        public function process_account_upgrade()
        {
            
        }
        
        public function expired_trial_version()
        {
            $data['title'] = "Trial expired";
            
            $this->load->view("admin/templates/auth-header", $data);
            $this->load->view("admin/account/trial_expired");
            $this->load->view("admin/templates/auth-footer");
        }
        
        /*
        *zoho books account if the account type is not trial
        *------------------------------------------------------------------------------------------------------
        */

        //TODO: create user as a customer in our account application, Zoho books
        //TODO: create invoice from zoho books
        //TODO: send client as invoice from zoho books
        //TODO: create recurring invoice from zoho books

        /*------------------------------------------------------------------------------------------------------
        */
    }
?>