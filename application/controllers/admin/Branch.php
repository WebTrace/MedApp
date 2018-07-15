<?Php
    class Branch extends MY_Controller
    {
        public function index()
        {
            $user_id = $this->session->userdata('USER_ID');
            
            $data['branches']       = $this->branch_model->fetch_practitioner_branch($user_id);
            $data['specialities']   = $this->branch_model->fetch_speciality();
            
            $this->load->view("admin/templates/header");
            $this->load->view("admin/branch/branches", $data);
            $this->load->view("admin/templates/footer");
        }
        
        public function create_branch()
        {
            if($this->branch_model->create_branch() == TRUE)
            {
                //TODO: set session data
                $user_id = $this->session->userdata('USER_ID');
                
                $query = $this->data_access->fetch_default_branch($user_id);
                $this->sessiondata_model->set_branch_data($query);
                
                //redirect to dashboard
                redirect(base_url() . "dashboard");
            }
            else
            {
                echo "Failed";
            }
        }
        
        /*
        *createe new branch only if the manager's account is new
        */
        
        public function new_branch()
        {
            $data["branch_types"]   = $this->branch_model->fetch_branch_type();
            $data["title"]          = "CLAIMA - Create new branch";
            
            $this->load->view("admin/templates/auth-header", $data);
            $this->load->view("admin/branch/new_branch");
            $this->load->view("admin/templates/auth-footer");
        }
        
        public function is_branch_set()
        {
            
        }
        
        public function branch_404()
        {
            $this->load->view("admin/templates/auth-header");
            $this->load->view("admin/branch/branch_404");
            $this->load->view("admin/templates/auth-footer");
        }
        
        public function fetch_practitioner_branch()
        {
            
        }
        
        public function fetch_single_branch()
        {
            
        }
        
        public function update_branch($branch_id)
        {
            $data["branch_details"] = $this->branch_model->update_branch($branch_id);
            
            $this->load->view("admin/templates/header");
            $this->load->view("admin/branch/update", $data);
            $this->load->view("admin/templates/footer");
        }
        
        public function branch_settings($branch_id)
        {
            $data['branch_id'] = $branch_id;
            
            $this->load->view("admin/templates/header");
            $this->load->view("admin/branch/settings", $data);
            $this->load->view("admin/templates/footer");
        }
        
        public function create_working_day()
        {
            
        }
        
        public function fetch_working_hours($branch_id)
        {
            $data['branch_id'] = $branch_id;
            
            $branch_working_days = $this->branch_model->fetch_branch_working_days($branch_id)->result_array();
            
            if(count($branch_working_days) > 0)
            {
                $data['working_days'] = $branch_working_days;
            }
            else
            {
                $data['working_days'] = $this->branch_model->fetch_default_working_hours()->result_array();
            }
            
            $this->load->view("admin/templates/header");
            $this->load->view("admin/branch/working-hours", $data);
            $this->load->view("admin/templates/footer");
            
        }
        
        public function appointment_slots()
        {
            $appointment_date   = $this->input->post("app_date");
            $weekday            = date('w', strtotime($appointment_date));
            $actual_weekday     = $weekday + 1;
            
            if($this->branch_model->fetch_single_branch_workday($actual_weekday)->num_rows() > 0)
            {
                //fetch single appointment work day
                $single_workday = $this->branch_model->fetch_single_branch_workday($actual_weekday)->result_array()[0];

                //fetch appointment duration
                $default_time = $this->branch_model->fetch_appointment_start_time()->result_array()[0];


                $appointemnt_start_time = strtotime($single_workday['from_time']);
                $appointment_duration   = $default_time['appointment_duration'];
                $single_workday_hours   = round(abs(strtotime($single_workday['to_time']) - strtotime($single_workday['from_time'])) / 3600, 2);

                //create appointment slots
                $appointment_slots      = ($single_workday_hours * 60) / $appointment_duration;

                //store appointment slots in a new a array;
                $appointment_time       = array(date('h:i', $appointemnt_start_time));

                for($i = 1; $i <= $appointment_slots - 1; $i ++)
                {
                    $new_time = date("h:i", strtotime("+$appointment_duration minutes", $appointemnt_start_time));
                    $appointment_time[$i] = $new_time;

                    $appointemnt_start_time = strtotime($new_time);
                }

                echo "Date: " . $appointment_date . " -- " . $actual_weekday;
                //echo json_encode($appointment_time);
            }
            else
            {
                echo "No slots available";
            }
        }
        
        public function appointment_settings($branch_id)
        {
            $data['branch_id'] = $branch_id;
            
            $this->load->view("admin/templates/header");
            $this->load->view("admin/branch/working-hours", $data);
            $this->load->view("admin/templates/footer");
        }
        
        public function fetch_branch_service()
        {
            $branch_id = $this->session->userdata("BRANCH_ID");
        }
        
        public function fetch_branch_service_practitioner()
        {
            
        }
    }
?>