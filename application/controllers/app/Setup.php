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