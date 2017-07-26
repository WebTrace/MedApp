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
            $this->load->view("pages/" . $page);
            $this->load->view("templates/footer");
        }
    }
?>