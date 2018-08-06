<?Php
    class Pages extends CI_Controller
    {
        public function view($page = 'home')
        {
            $path = APPPATH . 'views/site/' . $page . '.php';
            
            if(!file_exists($path))
            {
                show_404();
            }
            
            $data["account_types"] = $this->account_model->fetch_account_type_details();
            
            $this->load->view("site/templates/header");
            $this->load->view("site/slider");
            $this->load->view("site/about");
            $this->load->view("site/features");
            $this->load->view("site/pricing", $data);
            $this->load->view("site/contact");
            $this->load->view("site/templates/footer");
        }
    }
?>