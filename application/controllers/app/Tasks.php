<?Php
    class Tasks extends My_Controller
    {
        public function index()
        {
                        
            $task_data['tasks'] = $this->tasks_model->fetch_all_tasks();
            
            // echo $task_data;
            
            $this->load->view("app/templates/header");
            $this->load->view("app/tasks/tasks", $task_data);
            $this->load->view("app/templates/footer");
            
          
        }
        
        public function create_task()
        {
    
            $this->form_validation->set_rules('title'               , 'Task Name'           , "required|trim|xss_clean");
            $this->form_validation->set_rules('start_date'          , 'Scheduled Start'     , "required|trim|xss_clean");
            $this->form_validation->set_rules('due_date'            , 'Scheduled End'       , "required|trim|xss_clean");
            $this->form_validation->set_rules('description'         , 'Description'         , "required|trim|xss_clean");
                    
             try
                {
                    if($this->tasks_model->create_task() == TRUE)
                    {
                         redirect(base_url() . 'tasks');
                    }
                    else
                    {
                        
                    }
                }
                catch(Exception $e)
                {
                  
                }
            
        }
        
        public function edit_task($task_id)
        {
            $data['task'] = $task_id;
            
            $this->load->view("app/templates/header");
            $this->load->view("app/tasks/edit_task", $data);
            $this->load->view("app/templates/footer");
           
        }
        
        public function task_details($task_id)
        {
            $task_data['task_data'] = $this->tasks_model->fetch_task($task_id);
            
            $this->load->view("app/templates/header");
            $this->load->view("app/tasks/task_details", $task_data);
            $this->load->view("app/templates/footer");
            
    
        }
        
        
        public function fetch_single($task_id)
        {
            
        }
        
        public function delete_task()
        {
            
             if($this->tasks_model->delete_task() == TRUE)
            {
                
                redirect(base_url() . 'tasks');
            }
            else
            {
                
                redirect(base_url() . 'tasks');
            }
          
        }
        
        public function search_task()
        {
            
             $task_keyword = $this->input->post('search');
                        
             if($this->data_access->search_task($task_keyword) == TRUE)
            {
                //if patient is found, call fetch_task method()
                echo json_encode($this->task_model->fetch_task());
            }
            else
            {
                $error = array(
                    'not_found' => 'Task with ID number does not exist.'
                );
                
                echo json_encode($error);
            }
        }
    }
?>