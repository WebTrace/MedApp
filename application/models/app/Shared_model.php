<?Php
    class Shared_model extends CI_model
    {
        public function get_timestamp_date($timestamp)
        {
            return strtotime($timestamp);
        }
    }
?>