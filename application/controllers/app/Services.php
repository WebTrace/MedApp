<?Php
    class Services extends My_Controller
    {
        public function update_services($branch_id)
        {
            $data["branch_id"] = $branch_id;
            
            $this->load->view("app/templates/header");
            $this->load->view("app/settings/services/service-manager", $data);
            $this->load->view("app/templates/footer");
        }
    }
?>