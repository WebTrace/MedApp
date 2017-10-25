<?Php
    class Billing_model extends CI_Model
    {
        public function fetch_billing_type()
        {
            $this->db->select("*");
            return $this->db->get("billing_type")->result_array();
        }
    }
?>