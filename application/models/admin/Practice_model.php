<?Php
    class Practice_model extends CI_Model
    {
        //add practice
        
        //fetch practice specality
        public function fetch_speciality()
        {
            return $this->db->get('practice_speciality')->result_array();
        }
    }
?>