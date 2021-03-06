<?Php
    class Users extends My_Controller
    {
        public function index()
        {
            //get logedin user id
            $user_id = $this->session->userdata("USER_ID");
            
            //get a list of branches
            $data["branches"]       = $this->branch_model->fetch_user_branch();
            $data["roles"]          = $this->user_model->fetch_role();
            $data['users']          = $this->user_model->fetch_user($user_id);
            $data['branch_name']    = $this->branch_model->fetch_user_branch_name($user_id);
            $data['specialities']   = $this->practitioner_model->fetch_speciality();
            
            $this->load->view("app/templates/header");
            $this->load->view("app/users/users", $data);
            $this->load->view("app/templates/footer");
        }
        
        public function create_user()
        {
            $this->form_validation->set_rules("user_role"           , "user role"               , "required|trim|xss_clean");
            //$this->form_validation->set_rules("title"               , "title"                   , "required|trim|xss_clean");
            $this->form_validation->set_rules("fname"               , "first name"              , "required|trim|xss_clean");
            $this->form_validation->set_rules("lname"               , "last name"               , "required|trim|xss_clean");
            //$this->form_validation->set_rules("id_number"           , "id number"               , "required|trim|xss_clean");
            $this->form_validation->set_rules("user_branch"         , "branch"                  , "required|trim|xss_clean");
            //$this->form_validation->set_rules("contact_no"          , "contact number"          , "required|trim|xss_clean");
            $this->form_validation->set_rules("email"               , "email address"           , "required|trim|xss_clean");
            //$this->form_validation->set_rules("confirm_email"       , "confirm email"           , "required|trim|xss_clean");
            $this->form_validation->set_rules("username"            , "username"                , "required|trim|xss_clean");
            //$this->form_validation->set_rules("password"            , "password"                , "required|trim|xss_clean");
            //$this->form_validation->set_rules("confirm_passw"       , "confirm password"        , "required|trim|xss_clean");
            
            if($this->input->post("user_role") == 1)
            {
                $this->form_validation->set_rules("practice_no"     , "practice number"         , "required|trim|xss_clean");
                //$this->form_validation->set_rules("hpcsa_no"        , "HPCSA number"            , "required|trim|xss_clean");
                $this->form_validation->set_rules("speciality"      , "seciality"               , "required|trim|xss_clean");
            }
            
            if($this->form_validation->run() == FALSE)
            {
                echo validation_errors();//TODO : Handle errors
            }
            else
            {
                try
                {
                    if($this->user_model->create_user() == TRUE)
                    {
                        $output = "";
                        
                    }
                    else
                    {
                        
                    }
                }
                catch(Exception $e)
                {
                    echo "Fatal error occured. User could not be added. " . $e->getMessage();
                }
            }
        }
        
        public function update_user($user_id)
        {
            $manager_id = $this->session->userdata("USER_ID");
            $data["user"] = array();
            
            if(count($this->data_access->fetch_single_user($user_id, $manager_id)) > 0)
            {
                $data["user"]           = $this->data_access->fetch_single_user($user_id, $manager_id)[0];
                $data["phone_contacts"] = $this->communication_model->fetch_phone_contact($user_id);
                $data["email_contacts"] = $this->communication_model->fetch_email_contact($user_id);
            }
            
            $this->load->view("app/templates/header");
            $this->load->view("app/users/update", $data);
            $this->load->view("app/templates/footer");
        }
        
        public function fetch_users()
        {
            
            return $this->db->get('user')->result_array();
        }
        
        public function delete_user()
        {
            
        }
        
        public function user_permission()
        {
            
        }
    }
?>