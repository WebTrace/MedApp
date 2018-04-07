<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'pages/view';
$route['registration'] = 'admin/authentication/signup';
$route['authentication'] = 'admin/authentication/signin';
$route['signin/user_signin'] = 'admin/signin/user_signin';
$route['signup'] = 'admin/signup';
$route['signup/signup_practitioner'] = 'admin/signup/signup_practitioner';
$route['feedback'] = 'admin/signup/feedback';
$route['activation_link'] = 'admin/communication/activation_link';
$route['signin/forgotpassw'] = 'admin/signin/forgot_password';

/*
*private url
*/
$route['dashboard']                                 = 'admin/dashboard';
$route['claim']                                     = 'admin/claim';
$route['appointment']                               = 'admin/appointment';
$route['reports']                                   = 'admin/reports';
$route['users']                                     = 'admin/users';
$route['tasks']                                     = 'admin/tasks';
$route['tasks/edit_task']                           = 'admin/tasks/edit_task';
$route['settings']                                  = 'admin/settings';
$route['signin']                                    = 'admin/signin';
$route['signup/check_email']                        = 'admin/signup/check_email';
$route['signup/check_username']                     = 'admin/signup/check_username';
$route['signup/account_activation/(:any)']          = 'admin/signup/account_activation/$1';
$route['signout']                                   = 'admin/signin/user_signout';
$route['practice']                                  = 'admin/practice';
$route['patients']                                  = 'admin/patients';
$route['patients/create_patient']                   = 'admin/patients/create_patient';
$route['appointment/waiting_room']                  = 'admin/appointment/waiting_room';
$route['appointment/single_waiting_room']           = 'admin/appointment/single_waiting_room';
$route['appointment/fetch_wating_room']             = 'admin/appointment/fetch_wating_room';
$route['appointment/create_waiting_room']           = 'admin/appointment/create_waiting_room';
$route['appointment/create_reffer_patient']         = 'admin/appointment/create_reffer_patient';
$route['patients/edit_patient/(:num)']              = 'admin/patients/edit_patient/$1';
$route['appointment/patient_waiting_room']          = 'admin/appointment/patient_waiting_room';
$route['appointment/waiting_patient']               = 'admin/appointment/is_patient_waiting';
$route['appointment/checkup_appointment']           = 'admin/appointment/fetch_checkup_appointment';
$route['appointment/create_checkup']                = 'admin/appointment/create_checkup';
$route['diagnosis/create_diagnosis']                = 'admin/diagnosis/create_diagnosis';
$route['patients/search_claima_patient']            = 'admin/patients/search_claima_patient';
$route['patients/search_branch_patient']            = 'admin/patients/search_branch_patient';
$route['patients/add_claima_patient']               = 'admin/patients/add_claima_patient';
$route['patients/ajax_fetch_single_user']           = 'admin/patients/ajax_fetch_single_user';
$route['patients/patient_file/(:num)']              = 'admin/patients/patient_file/$1';
$route['patients/medical_aid']                      = 'admin/patients/fetch_patient_medical_aid';
$route['patients/remove_patient']                   = 'admin/patients/remove_patient';
$route['billing/patient_billing_type']              = 'admin/billing/patient_billing_type';
$route['consultation']                              = 'admin/consultation';
$route['consultation/create_consultation']          = 'admin/consultation/create_consultation';
$route['claim/create_claim']                        = 'admin/claim/create_claim';
$route['users/create_user']                         = 'admin/users/create_user';
$route['branch/branches']                           = 'admin/branch';
$route['branch/create_branch']                      = 'admin/branch/create_branch';
$route['branch/new_branch']                         = 'admin/branch/new_branch';
$route['branch/branch_404']                         = 'admin/branch/branch_404';
$route['(:any)']                                    = 'pages/view/$1';
$route['404_override']                              = '';
$route['translate_uri_dashes']                      = FALSE;