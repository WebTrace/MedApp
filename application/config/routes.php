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
$route['default_controller']                        = 'pages/view';
$route['registration']                              = 'app/authentication/signup';
$route['authentication']                            = 'app/authentication/signin';
$route['signin/user']                               = 'app/signin/user_signin';
$route['signup']                                    = 'app/signup';
$route['account/upgrade']                           = 'app/setup/upgrade_account';
$route['trial/expired']                             = 'app/setup/expired_trial_version';
$route['signup/practitioner']                       = 'app/signup/signup_practitioner';
$route['feedback']                                  = 'app/signup/feedback';
$route['account/confirmation']                      = 'app/setup/account_confirm';
$route['account/suspended']                         = 'app/setup/account_suspended';
$route['account/activation']                        = 'app/communication/activation_link';
$route['signin/forgotpassw']                        = 'app/signin/forgot_password';

/*
*private url
*/
$route['dashboard']                                 = 'app/dashboard';
$route['claim']                                     = 'app/claim';
$route['appointment']                               = 'app/appointment';
$route['reports']                                   = 'app/reports';
$route['settings/users']                            = 'app/users';
$route['user/update/(:any)']                        = 'app/users/update_user/$1';
$route['reconciles']                                = 'app/reconciles';
$route['reconciles/start_reconcile']                = 'app/reconciles/start_reconcile';
$route['tasks']                                     = 'app/tasks';
$route['tasks/edit_task/(:num)']                    = 'app/tasks/edit_task/$1';
$route['tasks/task_details/(:num)']                 = 'app/tasks/task_details/$1';
$route['tasks/create_task']                         = 'app/tasks/create_task';
$route['tasks/delete_task']                         = 'app/tasks/delete_task';
$route['tasks/search_task']                         = 'app/tasks/search_task';
$route['settings']                                  = 'app/settings';
$route['signin']                                    = 'app/signin';
$route['signup/check_email']                        = 'app/signup/check_email';
$route['signup/check_username']                     = 'app/signup/check_username';
$route['signup/account_activation/(:any)']          = 'app/signup/account_activation/$1';
$route['signout']                                   = 'app/signin/user_signout';
$route['practice']                                  = 'app/practice';
$route['patients']                                  = 'app/patient';
$route['patient/create_patient']                    = 'app/patient/create_patient';
$route['appointment/waiting']                       = 'app/appointment/waiting_room';
$route['appointment/single_waiting_room']           = 'app/appointment/single_waiting_room';
$route['appointment/fetch_wating_room']             = 'app/appointment/fetch_wating_room';
$route['appointment/create_waiting_room']           = 'app/appointment/create_waiting_room';
$route['appointment/new']                           = 'app/appointment/create_appointment';
$route['appointment/create_reffer_patient']         = 'app/appointment/create_reffer_patient';
$route['patient/edit_patient/(:num)']               = 'app/patient/edit_patient/$1';
$route['appointment/patient_waiting_room']          = 'app/appointment/patient_waiting_room';
$route['appointment/waiting_patient']               = 'app/appointment/is_patient_waiting';
$route['appointment/checkup_appointment']           = 'app/appointment/fetch_checkup_appointment';
$route['appointment/create_checkup']                = 'app/appointment/create_checkup';
$route['diagnosis/create_diagnosis']                = 'app/diagnosis/create_diagnosis';
$route['patient/search_claima_patient']             = 'app/patient/search_claima_patient';
$route['patient/search_branch_patient']             = 'app/patient/search_branch_patient';
$route['patient/search']                            = 'app/patient/patient_app_search';
$route['patient/single']                            = 'app/patient/fetch_single_patient';
$route['patient/update/personal']                   = 'app/patient/update_patient';
$route['patient/add_claima_patient']                = 'app/patient/add_claima_patient';
$route['patient/ajax_fetch_single_user']            = 'app/patient/ajax_fetch_single_user';
$route['patient/file/(:any)']                       = 'app/patient/patient_file/$1';
$route['patient/medical_aid']                       = 'app/patient/fetch_patient_medical_aid';
$route['patient/remove_patient']                    = 'app/patient/remove_patient';
$route['patient/billing/type']                      = 'app/billing/patient_billing_type';
$route['consultation']                              = 'app/consultation';
$route['consultation/create_consultation']          = 'app/consultation/create_consultation';
$route['claim/create_claim']                        = 'app/claim/create_claim';
$route['users/create_user']                         = 'app/users/create_user';
$route['user/profile']                              = 'app/users/update_user';
$route['settings/branches']                         = 'app/branch';
$route['settings/security']                         = 'app/settings/security_setting';
$route['practitioner/service']                      = 'app/practitioner/fetch_service_practiotner';
$route['branch/practitioners']                      = 'app/practitioner/fetch_branch_practitioner';
$route['branch/services/(:any)']                    = 'app/services/update_services/$1';
$route['branch/schedular/(:any)']                   = 'app/schedular/schedular_settings/$1';
$route['branch/create_branch']                      = 'app/branch/create_branch';
$route['setup/branch/new']                          = 'app/setup/create_startup_branch';
$route['branch/update/(:any)']                      = 'app/branch/update_branch/$1';
$route['branch/settings/(:any)']                    = 'app/branch/branch_settings/$1';
$route['branch/workingdays/(:any)']                 = 'app/branch/fetch_working_hours/$1';
$route['appointment/slots']                         = 'app/branch/appointment_slots';
$route['branch/new']                                = 'app/setup/new_branch';
$route['branch/branch_404']                         = 'app/branch/branch_404';

//------------------------------------------------Account----------------------------------------------//
$route['addon/branch']                              = 'app/addon/add_account_branch';
$route['addon/buy']                                 = 'app/addon/addon_payment';

/*----------------------------------------Zoho API-----------------------------------------------------*/

$route['zoho']                                      = 'app/zoho/zoho';

/*----------------------------------------END----------------------------------------------------------*/

$route['(:any)']                                    = 'pages/view/$1';
$route['404_override']                              = '';
$route['translate_uri_dashes']                      = FALSE;