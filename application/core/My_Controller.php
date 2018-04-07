<?Php
    class My_Controller extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            
            //check if user signed in
            $this->is_user_signin();
            
            //check is there is existing branch
        }
        
        protected function is_user_signin()
        {
            if(!isset($_SESSION['USER_ID']))
            {
                //redirect back to login page
                header('Location:' . base_url() . 'signin');
                die();
            }
            else
            {
                if(!isset($_SESSION['BRANCH_ID']))
                {
                    //header('Location:' . base_url() . 'branch/branch_404');
                }
            }
        }
    }
?>