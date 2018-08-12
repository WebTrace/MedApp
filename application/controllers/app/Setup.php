<?php
    class Setup extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->is_user_signin();
        }

        public function new_branch()
        {
            $data["branch_types"]   = $this->branch_model->fetch_branch_type();
            $data["title"]          = "Medics - Create new branch";
            
            $this->load->view("app/templates/auth-header", $data);
            $this->load->view("app/branch/new_branch");
            $this->load->view("app/templates/auth-footer");
        }

        public function create_startup_branch()
        {
            if($this->branch_model->create_branch() == TRUE)
            {
                //TODO: set session data
                $user_id = $this->session->userdata('USER_ID');
                
                $query = $this->data_access->fetch_default_branch($user_id);
                $this->sessiondata_model->set_branch_data($query);
                
                //redirect to dashboard
                redirect(base_url() . "dashboard");
            }
            else
            {
                echo "Failed";
            }
        }

        public function account_confirm()
        {
            $data["title"] = "Signin - Account confirmation needed";
            $data["first_name"] = $this->session->userdata("FNAME");

            $this->load->view("app/templates/auth-header", $data);
            $this->load->view("app/feedback/account/account_confirm");
            $this->load->view("app/templates/auth-footer");
        }

        public function account_suspended()
        {
            $data["title"] = "Signin - Account is suspended";
            $data["first_name"] = $this->session->userdata("FNAME");

            $this->load->view("app/templates/auth-header", $data);
            $this->load->view("app/feedback/account/account_suspended");
            $this->load->view("app/templates/auth-footer");
        }
        
        public function expired_trial_version()
        {
            $data['title'] = "Trial expired";
            
            $this->load->view("app/templates/auth-header", $data);

            if (isset($_SESSION['REM_DAYS']))
            {
                $remaining_days = $_SESSION['REM_DAYS'];
                $data["remaining_days"] = $remaining_days;

                if ($_SESSION['REM_DAYS'] > 0 & $_SESSION['REM_DAYS'] <= TRIAL_DAYS)
                    $this->load->view("app/account/trial/trial_active", $data);
                else
                    $this->load->view("app/account/trial/trial_expired", $data);
            }

            $this->load->view("app/templates/auth-footer");
        }

        public function upgrade_account()
        {
            $data['account_types'] = $this->account_model->fetch_account_type();
            $data['title'] = "Upgrade account";
            
            $this->load->view("app/templates/auth-header", $data);
            $this->load->view("app/account/upgrade_account");
            $this->load->view("app/templates/auth-footer");
        }

        public function is_user_signin()
        {
            if (!isset($_SESSION['USER_ID']))
            {
                redirect(base_url() . "signin");
                die();
            }
        }
    }
?>