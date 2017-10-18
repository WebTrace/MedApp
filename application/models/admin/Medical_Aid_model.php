<?Php
    class Medical_Aid_model extends CI_Model
    {
        public function create_medical_aid($patint_id, $medical_aid_no, $medical_aid_scheme, $medical_aid_option)
        {
            $medical_data = array(
                'patient_id'        => $patint_id,
                'medical_aid_no'    => $medical_aid_no,
                'medical_scheme'    => $medical_aid_scheme,
                'medical_option'    => $medical_aid_option
            );
            
            $this->db->insert('medical_aid', $medical_data);
        }
        
        public function create_dependant($dependant_id, $medical_aid_id, $depedant_code, $relationship_code)
        {
            $dependant_data = array(
                'dependant_id'          => $dependant_id,
                'medical_aid_id'        => $medical_aid_id,
                'dependant_code'        => $depedant_code,
                'relaltionship_code'    => $relationship_code
            );
            
            $this->db->insert('dependant', $dependant_data);
        }
    }
?>