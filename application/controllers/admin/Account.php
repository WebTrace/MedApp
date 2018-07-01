<?Php
    class Account extends MY_Controller
    {
        public function account_type($account_type = null)
        {
            
        }
        
        public function upgrade_account()
        {
            $data['account_types'] = $this->account_model->fetch_account_type();
            
            $this->load->view("admin/templates/header");
            $this->load->view("admin/account/upgrade_account", $data);
            $this->load->view("admin/templates/footer");
        }
    }
?>