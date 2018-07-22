<?Php
    class Billing extends My_Controller
    {
        public function patient_billing_type()
        {
            $patient_id = $this->input->post("patient_id");
            //echo $patient_id;
            echo json_encode($this->billing_model->fetch_patient_billing_type($patient_id));
        }
    }
?>