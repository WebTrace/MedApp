<?Php
    class Medical_model extends CI_Model
    {
        public function create_medical_aid($patient_id, $medical_aid_no, $medical_aid_scheme, $medical_aid_option, $price_option)
        {
            $medical_data = array(
                'patient_id'        => $patient_id,
                'medical_aid_no'    => $medical_aid_no,
                'medical_scheme'    => $medical_aid_scheme,
                'medical_option'    => $medical_aid_option,
                'price_option'      => $price_option
            );
            
            $this->db->insert('medical_aid', $medical_data);
        }
        
        public function create_dependant($dependant_id, $medical_aid_id, $depedant_code, $relationship_code)
        {
            $dependant_data = array(
                'medical_aid_id'        => $medical_aid_id,
                'dependant_id'          => $dependant_id,
                'dependant_code'        => $depedant_code,
                'relationship_code'     => $relationship_code
            );
            
            $this->db->insert('dependant', $dependant_data);
        }
        
        public function fetch_relationship()
        {
            $this->db->select("*");
            return $this->db->get("dependant_relationship")->result_array();
        }
    }
?>