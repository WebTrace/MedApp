<?Php
    class Tasks_model extends CI_Model
    {
        public function create_task()
        {
            $task_title = $this->input->post();
            
            $this->db->trans_start();
            
            $this->task_data($task_title);
            
            $this->create_task_category();
            
            $this->create_task_status();
            
            $this->db-trans_complete();
            
            return $this->db->trans_status();
        }
        
        public function update_task()
        {
            
        }
        
        public function task_data($task_title)
        {
            
        }
        
        public function create_task_category()
        {
            
        }
        
        public function create_task_status()
        {
            
        }
    }
?>