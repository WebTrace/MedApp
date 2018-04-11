<?Php
    class Tasks_model extends CI_Model
    {
    
        public function create_task()
        {
            // get inputs - new task
            $title          = $this->input->post('title');
            $start_date     = $this->input->post('start_date');
            $due_date       = $this->input->post('due_date');
            $description    = $this->input->post('description');
            $user_id        = $this->session->userdata('USER_ID');
          
            // get inputs - task category
           // $task_cat_name = $this->input->post('name');
            $task_cat_name = "Medical Aid";
            $task_cat_description =$this->input->post('description');
            
            
            // get inputs - task status
            //$task_status_name = $this->input->post('name');
            $task_status_name = "Open";
            $task_status_description =$this->input->post('description');
            
            
            
            $this->db->trans_start();
            
            // new task
            $this->new_task_data($title,$start_date,$due_date,$description, $user_id);
            // new task category
            $this->create_task_category($task_cat_name, $task_cat_description);
            // new task status
            $this->create_task_status($task_status_name, $task_status_description);
            
            // get all tasks
            $this->fetch_all_tasks();
            
            // update task details
            //$this->update_task($id);
            
            // delete task
           // $this->delete_task();
            
            // Complete transaction
            $this->db->trans_complete();
            
            return $this->db->trans_status();
        }
        
        public function update_task($id)
        {
             $task_data = array
            (
                'title'              => $title,
                'start_date'         => $start_date,
                'due_date'           => $due_date,
                'description'        => $description,
            );
            
            $this->db->where('id', $id);

            $this->db->update('task', $task_data);
        }
        
        public function delete_task()
        {
            
            $task_id = $this->input->post('task_id');
            
            $this->db->where('task_id', $task_id);
            $this->db->delete('task');
        }
        
        public function new_task_data($title, $start_date, $due_date, $description, $user_id)
        {
           $task_data = array
            (
                'title'              => $title,
                'start_date'         => $start_date,
                'due_date'           => $due_date,
                'description'        => $description,
                'user_id'            => $user_id
            );
            
            $this->db->insert('task', $task_data);
           
        }
        
        public function create_task_category($task_category_name, $task_category_description)
        {
            $task_category = array
            (
                'name'          => $task_category_name,
                'description'   => $task_category_description
            );
            
            $this->db->insert('task_category', $task_category);
        }
        
        public function create_task_status($task_status_name, $task_status_description)
        {
            $task_status = array
            (
               'name' =>  $task_status_name,
               'description' => $task_status_description
            );
            
            $this->db->insert('task_status', $task_status);
        }
        
        public function fetch_all_tasks()
        {
            // $this->data_access->fetch_tasks();
            return $this->db->get('task')->result_array();
        }
        
        public function fetch_task($task_id)
        {
            $this->db->where('task_id', $task_id);
            return $this->db->get('task')->result_array();
        }
        
        public function search_practitioner_task()
        {
            
        }
        
        public function task_details()
        {
            
        }
      
    }
?>