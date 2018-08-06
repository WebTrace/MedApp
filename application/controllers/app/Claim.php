admin<?Php
    class Claim extends My_Controller
    {
        public function index()
            
        {
            //Tshegofatso code
            $branch_id = $this->session->userdata("BRANCH_ID");
            
            $data["practitioners"]              = $this->practitioner_model->fetch_branch_practitioner($branch_id);
            
            $this->load->view("app/templates/header");
            $this->load->view("app/claims/claim", $data);
            $this->load->view("app/templates/footer");
        }
        
           public function create_claim()
        {
            $this->claim_model->create_claim();
        }
    }
?>