<?Php
    class My_Controller extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
        }
        
        protected function is_user_signin()
        {   //
            if(!isset($_SESSION['USER_ID']))
            {
                header('Location:' . base_url() . 'signin');
                die();
            }
        }
    }
?>