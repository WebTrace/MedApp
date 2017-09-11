<?Php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Appointment extends CI_controller
    {
        // public function index()
        // {
            
        // }



		/*function __construct()
        {
            // Call the Model constructor
            parent::__construct();
            $this->load->model('admin/Appointment_model');
        }*/


        /*appointment page Calendar view  */
        Public function index()
        {
            $this->load->view("admin/templates/header");
            $this->load->view("admin/appointments");
            $this->load->view("admin/templates/footer");
        }

        /*Get all Appointments */

        Public function getAppointments()
        {
            $result=$this->Calendar_model->getAppointment();
            echo json_encode($result);
        }
        /*Add new Appointment */
        Public function addAppointment()
        {
            $result=$this->Calendar_model->addAppointment();
            echo $result;
        }
        /*Update Appointment */
        Public function updateAppointment()
        {
            $result=$this->Calendar_model->updateAppointment();
            echo $result;
        }
        /*Delete Appointment*/
        Public function deleteAppointment()
        {
            $result=$this->Calendar_model->deleteAppointment();
            echo $result;
        }
        Public function dragUpdateAppointment()
        {	

            $result=$this->Calendar_model->dragUpdateAppointment();
            echo $result;
        }



    }
?>