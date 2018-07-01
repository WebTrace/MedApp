<?Php
    class Pages extends CI_Controller
    {
        public function view($page = 'home')
        {
            $path = APPPATH . 'views/pages/' . $page . '.php';
            
            if(!file_exists($path))
            {
                show_404();
            }
            
            $this->load->view("templates/header");
            
            //get account type details
            if($page == "pricing")
            {
                $data["account_types"] = $this->account_model->fetch_account_type_details();
                $this->load->view("pages/" . $page, $data);
            }
            else
            {
                $this->load->view("pages/" . $page);
            }
            
            $this->load->view("templates/footer");
        }
    }
?>