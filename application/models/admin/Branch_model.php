<?Php
    class Branch_model extends CI_Model
    {
        public function create_branch()
        {
            $user_id                = $this->session->userdata('USER_ID');
            $manager_id             = $this->session->userdata('MANAGER_ID');
            $branch_name            = $this->input->post('practice_name');
            $branch_type_code       = $this->input->post('practice_type');
            $address_line           = $this->input->post('address_line');
            $city                   = $this->input->post('city');
            $province               = $this->input->post('province');
            $location               = $this->input->post('location');
            $branch_status_code     = 1;
            $is_default             = "No";
            $is_new_branch          = "No";
            
            $this->db->trans_start(); //START SQL TRANSACTION
            
            //create branch
            $this->branch_data($branch_name, $address_line, $city, $province, $location);
            
            //get new user branch id
            $branch_id = $this->signup_model->get_new_added_id('branch', 'branch_id');
            
            //create branch manager
            $this->create_branch_manager($manager_id, $branch_id);
            
            //create user branch
            $this->branch_model->assign_user_branch($user_id, $branch_id);
            
            //create branch type
            $this->create_user_branch_type($branch_id, $branch_type_code);
            
            //check if there is existing default branch
            if($this->is_default_branch_exists($user_id) == 0) { $is_default = "Yes"; }
            
            //create default branch
            $this->default_branch_data($user_id, $branch_id, $is_default);
            
            //create branch_status
            $this->create_branch_status($branch_id, $branch_status_code);
            
            //uodate is new branch
            $this->update_is_new_branch($manager_id, $is_new_branch);
            
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
        public function update_branch($branch_id)
        {
            $this->db->where('MD5(branch_id)', $branch_id);
            return $this->db->get('branch')->result_array();
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
        
        public function fetch_branch_type()
        {
            return $this->db->get("branch_type")->result_array();
        }
        
        public function create_user_branch_type($branch_id, $branch_type_code)
        {
            $data = array(
                'branch_id'             => $branch_id,
                'branch_type_code'      => $branch_type_code
            );
            
            $this->db->insert("user_branch_type", $data);
        }
        
        public function fetch_branch_speciality($branch_id)
        {
            $this->db->from('branch_speciality bs');
            $this->db->join('speciality s', 'bs.speciality_code = s.speciality_code');
            $this->db->where('bs.branch_id', $branch_id);
            
            return $this->db->get()->result_array();
        }
        
        public function is_default_branch_exists($user_id)
        {
            $query = $this->data_access->is_default_branch_exists($user_id);
            return $query->row(0)->default_exists;
        }
        
        public function update_is_new_branch($manager_id, $is_new_account)
        {
            $data = array(
                'is_new_account'    => $is_new_account
            );
            
            $this->db->where("manager_id", $manager_id);
            $this->db->update("manager", $data);
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
        
        public function create_working_day($branch_id, $weekday_code, $from, $to)
        {
            $this->input->post("");
            $data = array(
                'branch_id'         => $branch_id,
                'weekday_code'      => $weekday_code,
                'from'              => $from,
                'to'                => $to
            );
            
            $this->insert('branch_working_day', $data);
        }
        
        public function fetch_branch_working_days($branch_id)
        {
            $this->db->from("weekday w");
            $this->db->join("branch_working_day b", "w.weekday_code = b.weekday_code");
            $this->db->where("md5(branch_working_day_id)", $branch_id);
            
            return $this->db->get();
        }
        
        public function fetch_single_user_branch_workday($day, $branch_id)
        {
            $this->db->from("workday w");
            $this->db->join("default_working_day d", "w.weekday_code = d.weekday_code");
            $this->db->where("w.weekday_number = d.weekday_code");
        }
        
        public function fetch_single_branch_workday($day)
        {
            $this->db->from("weekday w");
            $this->db->join("default_working_day d", "w.weekday_code = d.weekday_code");
            $this->db->where("w.weekday_number", $day);
            
            return $this->db->get();
        }
        
        public function fetch_default_working_hours()
        {
            $this->db->from("weekday w");
            $this->db->join("default_working_day d", "w.weekday_code = d.weekday_code");
            
            return $this->db->get();
        }
        
        public function fetch_appointment_start_time()
        {
            return $this->db->get("default_appointment_setting");
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
        
        public function count_branch_users($branch_id)
        {
            return $this->db->query("select count(*) as num_branch_users from user_branch where(branch_id = $branch_id");
        }
        
        public function count_account_branches($manager_id)
        {
            return $this->db->query("select count(*) as num_mngr_branches from branch b join manager_branch mb on b.branch_id = mb.branch_id where(manager_id = $manager_id)");
        }
    }
?>