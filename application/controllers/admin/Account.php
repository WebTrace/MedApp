<?Php
    class Account extends CI_Controller
    {
        public function account_type($account_type = null)
        {
            if($account_type == "trial")
            {
                $this->session->set_userdata("ACC_TYPE_CODE", 4);
            }
            else if($account_type == "basic")
            {
                $this->session->set_userdata("ACC_TYPE_CODE", 1);
            }
            else if($account_type == "standard")
            {
                $this->session->set_userdata("ACC_TYPE_CODE", 2);
            }
            else if($account_type == "professional")
            {
                $this->session->set_userdata("ACC_TYPE_CODE", 3);
            }
            else
            {
                echo "Account type does not exist";
            }
            
            //check if the accout type session was set
            if(isset($_SESSION["ACC_TYPE_CODE"]))
            {
                redirect(base_url() . "signup");
            }
            else
            {
                echo "Oops! Technical error occured. Our developers are currently working on it.";
            }
        }
    }
?>