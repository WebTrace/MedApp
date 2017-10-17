<?Php
    class Branch_model extends CI_Model
    {
        /*
        *
        */
        public function create_branch($user_id, $branch_name, $address_line, $city, $province, $location, $default_branch)
        {
            $branch_data = array(
                'user_id'           => $user_id,
                'branch_name'       => $branch_name,
                'address_line'      => $address_line,
                'city'              => $city,
                'province'          => $province,
                'location'          => $location,
                'default_branch'    => $default_branch
            );
            
            //insert branch details
            $this->db->insert('branch', $branch_data);
        }
        
        //
        public function fetch_branch()
        {
            
        }
        
        //
        public function remove_branch()
        {
            
        }
        
        //
        public function branch_update()
        {
            
        }
        
        //
        public function fetch_single_branch()
        {
            
        }
        
        /*
        *
        */
        public function assign_user_branch($user_id, $branch_id)
        {
            $user_branch_data = array(
                'user_id'           => $user_id,
                'branch_id'         => $branch_id
            );
            
            //insert user allocation
            $this->db->insert('user_branch', $user_branch_data);
        }
        
        //
        public function fetch_user_branch()
        {
            //get user id from a session
            $user_id = $this->session->userdata("USER_ID");
            
            $this->db->where('user_id', $user_id);
            return $this->db->get('branch')->result_array();
        }
    }
?>