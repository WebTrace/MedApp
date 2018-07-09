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
$route['registration']                              = 'admin/authentication/signup';
$route['authentication']                            = 'admin/authentication/signin';
$route['signin/user']                               = 'admin/signin/user_signin';
$route['signup']                                    = 'admin/signup';
$route['account/upgrade']                           = 'admin/account/upgrade_account';
$route['trial/expired']                             = 'admin/account/expired_trial_version';
$route['signup/practitioner']                       = 'admin/signup/signup_practitioner';
$route['feedback']                                  = 'admin/signup/feedback';
$route['account/activation']                        = 'admin/communication/activation_link';
$route['signin/forgotpassw']                        = 'admin/signin/forgot_password';

/*
*private url
*/
$route['dashboard']                                 = 'admin/dashboard';
$route['claim']                                     = 'admin/claim';
$route['appointment']                               = 'admin/appointment';
$route['reports']                                   = 'admin/reports';
$route['settings/users']                            = 'admin/users';
$route['user/update/(:any)']                        = 'admin/users/update_user/$1';
$route['reconciles']                                = 'admin/reconciles';
$route['reconciles/start_reconcile']                = 'admin/reconciles/start_reconcile';
$route['tasks']                                     = 'admin/tasks';
$route['tasks/edit_task/(:num)']                    = 'admin/tasks/edit_task/$1';
$route['tasks/task_details/(:num)']                 = 'admin/tasks/task_details/$1';
$route['tasks/create_task']                         = 'admin/tasks/create_task';
$route['tasks/delete_task']                         = 'admin/tasks/delete_task';
$route['tasks/search_task']                         = 'admin/tasks/search_task';
$route['settings']                                  = 'admin/settings';
$route['signin']                                    = 'admin/signin';
$route['signup/check_email']                        = 'admin/signup/check_email';
$route['signup/check_username']                     = 'admin/signup/check_username';
$route['signup/account_activation/(:any)']          = 'admin/signup/account_activation/$1';
$route['signout']                                   = 'admin/signin/user_signout';
$route['practice']                                  = 'admin/practice';
$route['patients']                                  = 'admin/patient';
$route['patient/create_patient']                    = 'admin/patient/create_patient';
$route['appointment/waiting_room']                  = 'admin/appointment/waiting_room';
$route['appointment/single_waiting_room']           = 'admin/appointment/single_waiting_room';
$route['appointment/fetch_wating_room']             = 'admin/appointment/fetch_wating_room';
$route['appointment/create_waiting_room']           = 'admin/appointment/create_waiting_room';
$route['appointment/create_reffer_patient']         = 'admin/appointment/create_reffer_patient';
$route['patient/edit_patient/(:num)']               = 'admin/patient/edit_patient/$1';
$route['appointment/patient_waiting_room']          = 'admin/appointment/patient_waiting_room';
$route['appointment/waiting_patient']               = 'admin/appointment/is_patient_waiting';
$route['appointment/checkup_appointment']           = 'admin/appointment/fetch_checkup_appointment';
$route['appointment/create_checkup']                = 'admin/appointment/create_checkup';
$route['diagnosis/create_diagnosis']                = 'admin/diagnosis/create_diagnosis';
$route['patient/search_claima_patient']             = 'admin/patient/search_claima_patient';
$route['patient/search_branch_patient']             = 'admin/patient/search_branch_patient';
$route['patient/add_claima_patient']                = 'admin/patient/add_claima_patient';
$route['patient/ajax_fetch_single_user']            = 'admin/patient/ajax_fetch_single_user';
$route['patient/patient_file/(:any)']               = 'admin/patient/patient_file/$1';
$route['patient/medical_aid']                       = 'admin/patient/fetch_patient_medical_aid';
$route['patient/remove_patient']                    = 'admin/patient/remove_patient';
$route['billing/patient_billing_type']              = 'admin/billing/patient_billing_type';
$route['consultation']                              = 'admin/consultation';
$route['consultation/create_consultation']          = 'admin/consultation/create_consultation';
$route['claim/create_claim']                        = 'admin/claim/create_claim';
$route['users/create_user']                         = 'admin/users/create_user';
$route['user/profile']                              = 'admin/users/update_user';
$route['settings/branches']                         = 'admin/branch';
$route['settings/security']                         = 'admin/settings/security_setting';
$route['settings/services']                         = 'admin/services';
$route['settings/schedular']                        = 'admin/schedular';
$route['branch/create_branch']                      = 'admin/branch/create_branch';
$route['branch/update/(:any)']                      = 'admin/branch/update_branch/$1';
$route['branch/new']                                = 'admin/branch/new_branch';
$route['branch/branch_404']                         = 'admin/branch/branch_404';

//------------------------------------------------Account----------------------------------------------//
$route['addon/branch']                              = 'admin/addon/add_account_branch';
$route['addon/buy']                                 = 'admin/addon/addon_payment';

/*----------------------------------------Zoho API-----------------------------------------------------*/

$route['zoho']                                      = 'admin/zoho/zoho';

/*----------------------------------------END----------------------------------------------------------*/

$route['(:any)']                                    = 'pages/view/$1';
$route['404_override']                              = '';
$route['translate_uri_dashes']                      = FALSE;