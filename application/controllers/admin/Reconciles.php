<?Php
    class Reconciles extends My_Controller
    {
        public function index()
        {
            $data['data'] = 'Reconcile works';
            
            $this->load->view("admin/templates/header");
            $this->load->view("admin/reconciles/reconciles", $data);
            $this->load->view("admin/templates/footer");
        }
        
        public function start_reconcile()
        {
            
        }
    }
?>