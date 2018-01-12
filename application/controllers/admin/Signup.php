<?Php
    class Signup extends CI_Controller
    {
        public function index()
        {
            $data['specialities'] = $this->practitioner_model->fetch_speciality();
            $data['title'] = 'Sign up';
            
            $this->load->view("admin/templates/auth-header", $data);
            $this->load->view("admin/authentication/signup", $data);
            $this->load->view("admin/templates/auth-footer");
        }
        
        public function signup_practitioner()
        {
            $output = array();
            
            //perfom form validation
            $this->form_validation->set_rules('title',                  'title',                'required|trim|xss_clean');
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
            
            if($this->form_validation->run() == FALSE)
            {
                //TODO : handle form errors
            }
            else
            {
                
                if($this->signup_model->signup_practioner() == TRUE)
                {
                    //get email and hash from session
                    $email = $this->session->userdata("registration_email");
                    $hash = $this->session->userdata("hash");
                    
                    //notiy user that their account was created successfully 
                    $output = "<div class='feedback-header text-center'>";
                    $output .= "<i class='fa fa-check-circle' id='account-success'></i>";
                    $output .= "</div>";
                    $output .= "<h4 class='confirm-header'>Thank you for choosing CLAIMA.</h4>";
                    $output .= "<p>Your account was created successfully. An email with instructions on how activating your account was sent to you.</p>";

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
                echo validation_errors();
            }
        }
        
        public function deactivate_practitioner()
        {
            
        }
        
        public function feedback()
        {
            $this->load->view("admin/templates/auth-header");
            $this->load->view("admin/feedback/feedback");
            $this->load->view("admin/templates/auth-footer");
        }
    }
?>