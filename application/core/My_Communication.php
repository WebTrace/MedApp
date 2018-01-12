<?Php
    class Communication extends CI_Controller
    {
        //send account activation link
        public function activation_link()
        {
            $from       = "no-repy@webtrace.co.za";
            $to         = "";
            $subejct    = "";
            $message    = "";
            
            if($this->send_email($from, $to, $subejct, $message) == TRUE)
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
            }
            
            $this->load->view("admin/templates/auth-header");
            $this->load->view("admin/feedback/feedback", $data);
            $this->load->view("admin/templates/auth-footer");
        }
        
        //send 
        
        private function send_email($from, $to, $subject, $message)
        {
            //send email to a user to confirm their account
            $this->email->from($from);
            $this->email->to($to);
            $this->email->subject($subject);
            $this->email->message($message);

            if($this->email->send())
            {
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }
        
        public function send_sms()
        {
            
        }
    }
?>