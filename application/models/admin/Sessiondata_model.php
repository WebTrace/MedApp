<?Php
    class Sessiondata_model extends CI_Model
    {
        public function set_user_data($query)
        {
            $user_data = array(
                'USER_ID'           => $query->row(0)->user_id,
                'USER_ROLE'         => $query->row(0)->role_code,
                'ROLE_NAME'         => $query->row(0)->role_name,
                'USER_STATUS'       => $query->row(0)->status_code,
                'FNAME'             => $query->row(0)->first_name,
                'LNAME'             => $query->row(0)->last_name,
                //'HASH'              => $query->row(0)->hash,
                'EMAIL'             => $query->row(0)->email_address,
                //'IS_NEW_ACCOUNT'    => $query->row(0)->is_new_account,
                'USER_TITLE'        => $query->row(0)->title
            );

            $this->session->set_userdata($user_data);
        }
        
        public function set_branch_data($query)
        {
            $branch_data = array(
                'BRANCH_ID'         => $query->row(0)->branch_id,
                'BRANCH_STATUS'     => $query->row(0)->branch_status_code,
                'BRANCH_NAME'       => $query->row(0)->branch_name,
                'LOCATION'          => $query->row(0)->location,
                'PROVINCE'          => $query->row(0)->province,
                'CONTACT_NO'        => $query->row(0)->tel_no,
                'EMAIL_ADDR'        => $query->row(0)->email_address
            );
            
            $this->session->set_userdata($branch_data);
        }
        
        public function set_account_data($query)
        {
            $account_data = array(
                "ACC_TYPE_CODE"    => ""//$query->row(0)->
            );
        }
    }
?>