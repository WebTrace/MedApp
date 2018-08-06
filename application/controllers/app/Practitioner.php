<?Php
    class Practitioner extends My_Controller
    {
        public function fetch_branch_practitioner()
        {
            $branch_id = $this->session->userdata("BRANCH_ID");
            $branch_pratitioners = $this->practitioner_model->fetch_branch_practitioner($branch_id);
            
            echo json_encode($branch_pratitioners);
        }
        
        public function fetch_service_practiotner()
        {
            $branch_id = $this->session->userdata("BRANCH_ID");
            $service_code = $this->input->post("service_code");
            $flag = $this->input->post("flag");
            
            $service_pratitioner = $this->practitioner_model->fetch_practitioner_service($branch_id, $service_code);
            
            if(isset($flag) && $flag == 1)
            {
                echo json_encode($service_pratitioner);
            }
        }
    }
?>