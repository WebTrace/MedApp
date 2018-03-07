<?Php
    class Tasks extends My_Controller
    {
        public function index()
        {
            $this->load->view("admin/templates/header");
            $this->load->view("admin/tasks/tasks");
            $this->load->view("admin/templates/footer");
        }
        
        public function create_task()
        {
            //$this->tasks_model->create_task();
        }
        
        public function edit_task()
        {
            $this->load->view("admin/templates/header");
            $this->load->view("admin/tasks/tasks");
            $this->load->view("admin/templates/footer");
        }
        
        public function fetch_task()
        {
            
        }
        
        public function fetch_single($task_id)
        {
            //
        }
    }
?>