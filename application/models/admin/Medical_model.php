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
        
        public function fetch_patient_medical_aid($patient_id)
        {
            $this->db->from("patient p");
            $this->db->join("patient_medical_aid m", "p.patient_id = m.patient_id");
            $this->db->join("medical_aid d", "m.medical_aid_id = d.medical_aid_id");
            $this->db->where('m.patient_id', $patient_id);
            
            return $this->db->get()->result_array();
        }
    }
?>