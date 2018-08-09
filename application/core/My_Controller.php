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
            if(isset($_SESSION['USER_ID']))
            {
                //check is there is existing branch
                if(isset($_SESSION['FULL_ACCESS']))
                {
                    
                }
                else if(isset($_SESSION['PARTIAL_ACCESS']))
                {

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
?>