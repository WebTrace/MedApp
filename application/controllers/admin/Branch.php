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
                
                echo "Created";
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
            $data["branch_types"] = $this->branch_model->fetch_branch_type();
            
            $this->load->view("admin/templates/auth-header");
            $this->load->view("admin/branch/new_branch", $data);
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
        
        public function update_branch()
        {
            
        }
    }
?>