<?Php
    class Signin extends CI_Controller
    {
        public function index()
        {
            $data['title'] = "Sign in";
            
            $this->load->view("admin/templates/auth-header", $data);
            $this->load->view("admin/authentication/signin");
            $this->load->view("admin/templates/auth-footer");
        }
        
        public function user_signin()
        {
            //set validation rules for login
            $this->form_validation->set_rules("username", "username", "required|trim|xss_clean");
            $this->form_validation->set_rules("password", "password", "required|xss_clean");
            
            if($this->form_validation->run() == FALSE)
            {
                echo validation_errors();
            }
            else
            {
                if($this->signin_model->user_signin() ==  TRUE)
                {
                    if($this->session->userdata("USER_STATUS") == 1)
                    {
                        redirect(base_url() . "dashboard");
                    }
                    else
                    {
                        if($this->session->userdata("USER_STATUS") == 2)
                        {
                            $data['icon'] = '<i class="fa fa-check-circle-o" id="confirm-color"></i>';
                            $data['title'] = '<h4 class="confirm-header">Please confirm your account.</h4>';
                            $data['content'] = '<p>Your account is currently inactive. Please activate your account by 
                                                clicking on the link sent to your emails. Click the button below if 
                                                you have not recieved a confilation link</p>';
                            $data['link'] = '<a class="btn btn-save" href="' . base_url() . 'activation_link">Resend link</a>';
                        }
                        else
                        {
                            $data['icon'] = '<i class="fa fa-lock" id="suspension-color"></i>';
                            $data['title'] = '<h4 class="confirm-header">Account suspended</h4>';
                            $data['content'] = '<p>This account is suspended due to system rules violation. Code : ERR_0102</p>';
                            //$data['link'] = '<a href="' . base_url() . '"></a>';
                        }
                        
                        /*load feedback view*/
                        $this->load->view("admin/templates/auth-header");
                        $this->load->view("admin/feedback/feedback", $data);
                        $this->load->view("admin/templates/auth-footer");
                    }
                }
                else
                {
                    $this->session->set_flashdata("SIGNIN_FAILED", "Error occured. Invalid password or username. Err" . var_dump($this->signin_model->user_signin()));
                    
                    redirect(base_url() . "signin");
                }
            }
        }
        
        public function current_user()
        {
            $fname = $this->session->userdata("FNAME");
            $lname = $this->session->userdata("LNAME");
            
            $display_name = $lname . " " . substr($fname, 0, 1);
            
            return $display_name;
        }
        
        public function user_signout()
        {
            $this->session->unset_userdata("USER_ID");
            $this->session->unset_userdata("USER_ROLE");
            $this->session->unset_userdata("USER_STATUS");
            $this->session->unset_userdata("FNAME");
            $this->session->unset_userdata("LNAME");
            $this->session->unset_userdata("HASH");
            $this->session->unset_userdata("EMAIL");
            
            $this->session->sess_destroy();
            redirect(base_url() . "signin");
        }
        
        public function forgot_password()
        {
            $this->form_validation->set_rules("email_address", "email", "required|trim");
            
            if($this->form_validation->run() == FALSE)
            {
                $this->load->view("admin/templates/auth-header");
                $this->load->view("admin/forgotpassw");
                $this->load->view("admin/templates/auth-footer");
            }
            else
            {
                if($this->signin_model->forgot_password() == TRUE)
                {
                    if($this->signin_model->update_password($this->generate_password()) == TRUE)
                    {
                        $data['icon']       = '<i class="fa fa-check-circle-o"></i>';
                        $data['title']      = '<h4>Password successfully retrieved</h4>';
                        $data['content']    = '<p>A password was sent to your via email. You can change it in the settings.</p>';
                        $data['link']       = '';
                        
                        //call feeback view and display success message
                        $this->load->view("admin/templates/auth-header");
                        $this->load->view("admin/feedback/feedback", $data);
                        $this->load->view("admin/templates/auth-footer");
                        
                        //TODO : send new password to the user
                    }
                    else
                    {
                        
                        //TODO : DB could not be updated
                    }
                }
                else
                {
                    //TODO : call feeback view and display error
                    $this->session->set_flashdata("ERR_PASSSW_RESET", "<p class='alert alert-danger'>This email <i>" . $this->session->userdata("USER_EML") . "</i> was not found.</p>");
                    redirect(base_url() . 'signin/forgotpassw');
                    
                }
            }
        }
        
        //generate passsword
        public function generate_password()
        {
            $chars = array(
                'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 
                'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 
                'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 
                'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 
                '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '!', '@', '#', 
                '$', '%', '^', '&', '*', '(', ')', '_', '-', '+', '/', '|', 
                '}', '{', '?', '.', ','
             );
            
            //array for new password characters
            $password_chars = array();
            $password = "";
            
            //get random password characters
            for($i = 0; $i < 10; $i++)
            {
                $random_char = rand(1, count($chars));
                
                if($random_char == count($chars))
                {
                    $random_char -= 1;
                }
                
                $password_chars[$i] = $chars[$random_char];
            }
            
            //combine password character into one string
            for($j = 0; $j < count($password_chars); $j++)
            {
                $password .= $password_chars[$j];
            }
            
            return $password;
        }
        
        public function send_email()
        {
            
        }
    }
?>