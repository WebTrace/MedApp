<?Php
    class Schedular extends My_Controller
    {
        public function schedular_settings($branch_id)
        {
            $data["branch_id"] = $branch_id;
            
            /*$this->load->view("admin/templates/header");
            $this->load->view("admin/settings/scheduler/schedule-manager", $data);
            $this->load->view("admin/templates/footer");*/
            
        }
    }
?>