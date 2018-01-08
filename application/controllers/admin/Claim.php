<?Php
    class Claim extends My_Controller
    {
        public function index()
            
        {
            //Tshegofatso code
            $branch_id = $this->session->userdata("BRANCH_ID");
            
            $data["practitioners"]              = $this->practitioner_model->fetch_branch_practitioner($branch_id);
            
            $this->load->view("admin/templates/header");
            $this->load->view("admin/claims/claim", $data);
            $this->load->view("admin/templates/footer");
        }
        
           public function create_claim()
        {
            $this->claim_model->create_claim();
        }
    }
?>