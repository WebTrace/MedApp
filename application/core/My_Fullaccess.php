<?Php
    class My_Fullaccess extends CI_Controller
    {
        protected function is_user_signin()
        {
            if(!isset($_SESSION['NO_BRANCH']))
            {
                //redirect back to login page
                redirect(base_url() . 'new_branch');
                die();
            }
        }
    }
?>