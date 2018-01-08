<?Php
    class Tasks extends My_Controller
    {
        public function index()
        {
            //$this->send_email('no-reply', 'emmkga@gmail.com', 'Test', 'This is a test message');
            
            $this->load->view("admin/templates/header");
            $this->load->view("admin/tasks/tasks");
            $this->load->view("admin/templates/footer");
        }
        
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
    }
?>