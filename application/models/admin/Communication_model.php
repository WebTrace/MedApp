<?Php
    class Communication_model extends CI_Model
    {
        /*
         * create_phone_contact
         *
         * what the function does
         *
         * @param (type) about this param
         * @return void
         */
        public function create_phone_contact($user_id, $contact_no)
        {
            $phone_data = array(
                'user_id'       => $user_id,
                'contact_no'    => $contact_no
            );
            
            //insert phone details
            $this->db->insert('phone_contact', $phone_data);
        }
        
        /*
        *
        */
        public function create_phone_contact_priority($priority_code, $phone_contact_id)
        {
            $phone_priority_data = array(
                'priority_code'     => $priority_code,
                'phone_contact_id'  => $phone_contact_id
            );
            
            //insert phone contact priority details
            $this->db->insert('phone_contact_priority', $phone_priority_data);
        }
        
        /*
        *
        */
        public function create_phone_contact_type($contact_type_code, $phone_contact_id)
        {
            $phone_contact_type_data = array(
                'contact_type_code'         => $contact_type_code,
                'phone_contact_id'          => $phone_contact_id
            );
            
            //insert phone contact type
            $this->db->insert('phone_contact_type', $phone_contact_type_data);
        }
        
        /*
        *
        */
        public function create_email_contact($user_id, $email)
        {
            $email_data = array(
                'user_id'           => $user_id,
                'email_address'     => $email
            );
            
            //insert email details
            $this->db->insert('email_contact', $email_data);
        }
        
         /*
        *
        */
        public function create_contact_email_priority($priority_code, $email_contact_id)
        {
            $email_priority_data = array(
                'priority_code'     => $priority_code,
                'email_contact_id'  => $email_contact_id
            );
            
            //insert email contact priority details
            $this->db->insert('email_contact_priority', $email_priority_data);
        }
        
        /*
        *
        */
        public function create_email_contact_type($contact_type_code, $email_contact_id)
        {
            $email_contact_type_data = array(
                'contact_type_code'  => $contact_type_code,
                'email_contact_id'   => $email_contact_id
            );
            
            //insert email contact contact type details
            $this->db->insert('email_contact_type', $email_contact_type_data);
        }
        
        /*
        *
        */
        public function create_address($user_id, $address_line, $suburb, $city, $postal_code)
        {
            $physical_address_data = array(
                'user_id'               => $user_id,
                'address_line'          => $address_line,
                'suburb'                => $suburb,
                'city'                  => $city,
                'postal_code'           => $postal_code
            );
            
            //insert address details
            $this->db->insert('address', $physical_address_data);
        }
        

        /*
        *
        */
        public function create_user_address($address_id, $address_type_code)
        {
            $user_address_data = array(
                'address_id'            => $address_id,
                'aaddress_type_code'    => $address_type_code
            );
            
            //insert user address type details
            $this->db->insert('user_address_type', $user_address_data);
        }
        
        /*
        *
        */
        public function create_address_type($address_id, $address_type_code)
        {
            $addresS_type_data = array(
                'address_id'            => $address_id,
                'address_type_code'     => $address_type_code
            );
        }
    }
?>