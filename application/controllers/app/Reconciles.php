<?Php
    class Reconciles extends My_Controller
    {
        public function index()
        {
            $data['data'] = 'Reconcile works';
            
            $this->load->view("app/templates/header");
            $this->load->view("app/reconciles/reconciles", $data);
            $this->load->view("app/templates/footer");
        }
        
        public function start_reconcile()
        {
            $this->load->view("app/templates/header");
            $this->load->view("app/reconciles/start_reconcile");
            $this->load->view("app/templates/footer");
        }
    }
?>