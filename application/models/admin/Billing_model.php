<?Php
    class Billing_model extends CI_Model
    {
        //create patient billing type
        public function create_patient_billing_type($patinet_id, $billing_type_code)
        {
            $patient_billing_data = array(
                'patient_id'            => $patinet_id,
                'billing_type_code'     => $billing_type_code
            );
            
            $this->db->insert('patient_billing_type', $patient_billing_data);
        }
        
        public function fetch_billing_type()
        {
            $this->db->select("*");
            return $this->db->get("billing_type")->result_array();
        }
        
        public function fetch_patient_billing_type()
        {
            $this->db->from('billing_type bt');
            $this->db->join('patient_billing_type pb', 'bt.billing_type_code = pb.billing_type_code');
            
            return $this->db->get()->result_array();
        }
    }
?>