<?Php
    class My_Controller extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            //check if user signed in
            $this->is_user_signin();
            
            //check if trial is active
            //check if payment is active
            //check account type
        }
        
        protected function is_user_signin()
        {
            if (isset($_SESSION['USER_ID']))
            {
                if (isset($_SESSION['ACC_MODE']))
                {
                    if ($_SESSION['ACC_MODE'] == ACC_MODE_TRIAL)
                    {
                        //check is there is existing branch
                        if (isset($_SESSION['NEW_BRANCH']))
                        {
                            if (isset($_SESSION['NEW_BRANCH']) == true)
                            {
                                //redirect back to login page
                                redirect(base_url() . 'branch/new');
                                die();
                            }
                        }
                        
                        //
                        if (isset($_SESSION['TRIAL_STATUS']))
                        {
                            if ($_SESSION['TRIAL_STATUS'] == 0)
                            {
                                redirect(base_url() . "trial_expired");
                                die();
                            }
                        }
                    }
                    else if ($_SESSION['ACC_MODE'] == ACC_MODE_FULL)
                    {
                        # code...
                    }
                }
                else
                {
                    //account error
                }
            }
            else
            {
                //redirect back to login page
                redirect(base_url() . 'signin');
                die();
            }
        }

        protected function is_branch_set()
        {
            
        }
    }

    class My_Security extends CI_Controller
    {
        
    }
?>