<?Php
    class Branch_model extends CI_Model
    {
        /*
        *
        */
        public function create_branch()
        {
            $user_id                = $this->session->userdata('USER_ID');
            $manager_id             = $this->session->userdata('MANAGER_ID');
            $branch_name            = $this->input->post('practice_name');
            $address_line           = $this->input->post('address_line');
            $city                   = $this->input->post('city');
            $province               = $this->input->post('province');
            $location               = $this->input->post('location');
            $branch_status_code     = 1;
            $is_default             = "No";
            
            $this->db->trans_start(); //START SQL TRANSACTION
            
            //create branch
            $this->branch_data($branch_name, $address_line, $city, $province, $location);
            
            //get new user branch id
            $branch_id = $this->signup_model->get_new_added_id('branch', 'branch_id');
            
            //create branch manager
            $this->create_branch_manager($manager_id, $branch_id);
            
            //check if there is existing default branch
            if($this->is_default_branch_exists($user) == 0)
            {
                $is_default             = "Yes";
            }
            
            //create default branch
            $this->default_branch_data($user_id, $branch_id, $is_default);
            
            //create branch_status
            $this->create_branch_status($branch_id, $branch_status_code);
            
            $this->db->trans_complete(); //END SQL TRANSACTION
            
            return $this->db->trans_status();
        }
        
        public function create_default_branch($user_id, $branch_id, $default_branch)
        {
            //create default branch
            $this->default_branch_data($user_id, $branch_id, $default_branch);
        }
        
        public function fetch_user_default_branch($user_id)
        {
            $this->db->from('branch b');
            $this->db->join('user_branch ub', 'b.branch_id = ub.branch_id');
            $this->db->join('user_branch_status bs', 'b.branch_id = bs.branch_id');
            $this->db->join('default_branch db', 'ub.user_branch_id = db.user_branch_id');
            $this->db->where('ub.user_id', $user_id);
            $this->db->where('db.is_default', 'Yes');
            
            return $this->db->get();
        }
        
        public function update_default_branch()
        {
            
        }
        
        //
        public function fetch_practitioner_branch($user_id)
        {
            $this->db->from("branch b");
            $this->db->join("manager_branch mb", "mb.branch_id = b.branch_id");
            $this->db->join("manager m", "m.manager_id = mb.manager_id");
            $this->db->where("m.user_id", $user_id);
            
            return $this->db->get()->result_array();
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
        public function create_branch_speciality($speciality_code, $branch_id)
        {
            
            $data = array(
                'branch_id'         => $branch_id,
                'speciality_code'   => $speciality_code
            );
            
            $this->db->insert('branch_speciality', $data);
        }
        
        //
        public function fetch_user_branch()
        {
            $this->db->from("user u");
            $this->db->join("manager m", "u.user_id = m.user_id");
            $this->db->join("manager_branch mb", "m.manager_id = mb.manager_id");
            $this->db->join("branch b", "mb.branch_id = b.branch_id");
            $this->db->where('u.user_id', $this->session->userdata("USER_ID"));
            return $this->db->get()->result_array();
        }
        
        public function fetch_user_branch_name($user_id)
        {
            $this->db->select("branch_name")->from("branch b");
            $this->db->join("user_branch ub", "b.branch_id = ub.branch_id");
            $this->db->where("ub.user_id", $user_id);
            
            return $this->db->get()->result_array();
        }
        
        public function fetch_speciality()
        {
            return $this->db->get('speciality')->result_array();
        }
        
        public function fetch_branch_speciality($branch_id)
        {
            $this->db->from('branch_speciality bs');
            $this->db->join('speciality s', 'bs.speciality_code = s.speciality_code');
            $this->db->where('bs.branch_id', $branch_id);
            
            return $this->db->get()->result_array();
        }
        
        public function is_default_branch_exists($user)
        {
            $query = $this->data_access->is_default_branch_exists($user);
            return $query->row(0)->default_exists;
        }
        
        public function default_branch_data($user_id, $branch_id, $is_default)
        {
            $data = array(
                'user_id'       => $user_id,
                'branch_id'     => $branch_id,
                'is_default'    => $is_default
            );
            
            $this->db->insert('default_branch', $data);
        }
        
        public function branch_data($branch_name, $address_line, $city, $province, $location)
        {
            $branch_data = array(
                'branch_name'       => $branch_name,
                'address_line'      => $address_line,
                'city'              => $city,
                'province'          => $province,
                'location'          => $location
            );

            //insert branch details
            $this->db->insert('branch', $branch_data);
        }
        
        public function create_branch_manager($manager_id, $branch_id)
        {
            $data = array(
                'manager_id'    => $manager_id,
                'branch_id'     => $branch_id
            );
            
            $this->db->insert("manager_branch", $data);
        }
        
        public function create_branch_status($branch_id, $branch_status_code)
        {
            $data = array(
                'branch_id'             => $branch_id,
                'branch_status_code'    => $branch_status_code
            );
            
            $this->db->insert('user_branch_status', $data);
        }
        
        
    }
?>