<?Php
    class Signup extends CI_Controller
    {
        public function index()
        {
            $account_type = $this->input->post("account_type");
            
            if($account_type == md5(BASIC_ACC))
            {
                $this->session->set_userdata("ACC_TYPE_CODE", BASIC_ACC);
            }
            else if($account_type == md5(STANDARD_ACC))
            {
                $this->session->set_userdata("ACC_TYPE_CODE", STANDARD_ACC);
            }
            else if($account_type == md5(PROFESSIONAL_ACC))
            {
                $this->session->set_userdata("ACC_TYPE_CODE", PROFESSIONAL_ACC);
            }

            //check if the accout type session was set
            if(isset($_SESSION["ACC_TYPE_CODE"]))
            {
                $data['specialities'] = $this->practitioner_model->fetch_speciality();
                $data['title'] = 'Sign up';

                $this->load->view("admin/templates/auth-header", $data);
                $this->load->view("admin/authentication/signup", $data);
                $this->load->view("admin/templates/auth-footer");
            }
            else
            {
                redirect(base_url() . "pricing");
                //echo "Oops! Technical error occured. Our techincal team is currently working on it.";
            }
        }
        
        public function signup_practitioner()
        {
            $output = array();
            
            //perfom form validation
            /*$this->form_validation->set_rules('title',                  'title',                'required|trim|xss_clean');
            $this->form_validation->set_rules('fname',                  'first name',           'required|trim|xss_clean');
            $this->form_validation->set_rules('hpcsa_no',               'HPCSA number',         'required|trim|xss_clean');
            $this->form_validation->set_rules('lname',                  'last name',            'required|trim|xss_clean');
            $this->form_validation->set_rules('username',               'username',             'required|trim|xss_clean');
            $this->form_validation->set_rules('password',               'password',             'required|xss_clean');
            $this->form_validation->set_rules('confirm_password',       'confirm password',     'required|xss_clean');
            $this->form_validation->set_rules('contact_no',             'contact number',       'required|trim|xss_clean');
            $this->form_validation->set_rules('email_address',          'email address',        'required|trim|xss_clean');
            $this->form_validation->set_rules('confirm_email',          'confrim email',        'required|trim|xss_clean');
            $this->form_validation->set_rules('practice_no',            'practice number',      'required|trim|xss_clean');
            $this->form_validation->set_rules('practice_name',          'practice name',        'required|trim|xss_clean');
            $this->form_validation->set_rules('practice_type',          'practice type',        'required|trim|xss_clean');
            $this->form_validation->set_rules('city',                   'city',                 'required|trim|xss_clean');
            $this->form_validation->set_rules('province',               'province',             'required|trim|xss_clean');
            $this->form_validation->set_rules('location',               'location',             'required|trim|xss_clean');
            */
            
            if($this->signup_model->signup_practioner() == TRUE)
            {
                //get email and hash from session
                $to             = $this->session->userdata("registration_email");
                $hash           = $this->session->userdata("HASH");
                $from           = "no-reply@webtrace.co.za";
                $subejct        = "CLAIMA Account Activation";
                $url            = base_url() . "signup/account_activation/" . $hash;
                $message        = $this->email_model->signup_content($url);

                //send an email
                if($this->communication_model->send_email($from, $to, $subejct, $message) == TRUE)
                {

                }
                else
                {

                }

                //notiy user that their account was created successfully 
                $output = "<div class='feedback-header text-center'>";
                $output .= "<i class='fa fa-check-circle' id='account-success'></i>";
                $output .= "</div>";
                $output .= "<h4 class='confirm-header'>Thank you for choosing CLAIMA.</h4>";
                $output .= "<p>Your account was created successfully. An email with instructions 
                on how to activate your account was sent to you.</p>";

                echo $output;
            }
            else
            {
                //notify user that their account was not created successfully
                //notiy user that their account was created successfully 
                $output = "<div class='feedback-header text-center'>";
                $output .= "<i class='fa fa-times-circle-o' id='account-failed'></i>";
                $output .= "</div>";
                $output .= "<h4 class='confirm-header'>Error occured.</h4>";
                $output .= "<p>Error occured while creating account.</p>";

                echo $output;
            }
        }
        
        public function check_email()
        {
            $email = $this->input->post("key");
            echo json_encode($this->signup_model->is_val_exists('email_contact', 'email_address', $email));
        }
        
        public function check_username()
        {
            $username = $this->input->post("key");
            echo json_encode($this->signup_model->is_val_exists('login', 'username', $username));
        }
        
        //
        public function account_activation($hash)
        {
            if($this->signup_model->activate_account($hash) == true)
            {
                //redirect back to login after successful account activation
                redirect(base_url() . "signin");
            }
            else
            {
                echo $this->patients_model->new_file_no();
                //echo "Failed " . $this->signup_model->create_hash('emmanuel66@live.co.za');
            }
        }
        
        public function deactivate_practitioner()
        {
            
        }
        
        public function feedback()
        {
            var_dump($this->account_model->fetch_account_type());
            //echo $this->patients_model->new_password();
            //echo $this->diagnosis_model->generate_treatment_reference();
            /*$from       = "no-repy@webtrace.co.za";
            $to         = "emmanuel66@live.co.za";
            $subejct    = "CLAIMA Test email";
            $message    = $this->email_model->signup_content(base_url());

            if($this->communication_model->send_email($from, $to, $subejct, $message) == TRUE)
            {
                echo "Email sent";
                //mail("emmanuel66@live.co.za", "Mail function", "This is sent from php mail");
            }
            else
            {
                echo "Email not sent";
            }
            
            /*if($this->send_email($from, $to, $subejct, $message) == TRUE)
            {
                $data['icon'] = "<i class='fa fa-envelope-o'></i>";
                $data['title'] = "<h4>Email was successfully sent to you.</h4>";
                $data['content'] = "<p>Visit your emails and click on the link sent to acivate your account.</p>";
            }
            else
            {
                $data['icon'] = "<i class='fa fa-times-circle-o error-color'></i>";
                $data['title'] = "<h4>Email could not be sent.</h4>";
                $data['content'] = "<p>An error occrued while sending a confirmation email.</p>";
            }*/
            /*if($this->communication_model->send_email($from, $to, $subejct, $message) == TRUE)
            {
                echo "working";
            }
            else
            {
                echo "Not working";
            }*/
            //$this->load->view("admin/templates/auth-header");
            //$this->load->view("admin/feedback/feedback");
            //$this->load->view("admin/templates/auth-footer");
        }
    }
?>