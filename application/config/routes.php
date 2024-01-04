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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'frontend';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//login and register
$route['login']='frontend/loginnow';
$route['register']='frontend/registernow';

// Admin panel
$route['admin'] ='admin/index';
$route['admin/logout'] ='admin/logout';
$route['admin/users'] ='admin/users/view';
$route['admin/users/add'] ='admin/users/add';
$route['admin/users/delete/(:any)'] ='admin/users/delete/$1';
$route['admin/contact'] ='admin/contact/view';
$route['admin/contact/delete/(:any)'] ='admin/contact/delete/$1';
$route['admin/admint'] ='admin/admin/view';
$route['admin/admint/delete/(:any)'] ='admin/admin/delete/$1';
$route['admin/subscription'] ='admin/subscription/view';
$route['admin/subscription/delete/(:any)'] ='admin/subscription/delete/$1';
$route['admin/product'] ='admin/product/view';
$route['admin/order'] ='admin/order/view';
$route['admin/order/delete/(:any)'] ='admin/order/delete/$1';

$route['admin/profile'] ='admin/profile/view';
$route['admin/profile/edit'] ='admin/profile/edit';
$route['report/report'] ='report/report/view';
$route['report/reportcontact'] ='report/reportcontact/view';
$route['report/reportadmin'] ='report/reportadmin/view';
$route['report/reportsubscription'] ='report/reportsubscription/view';
$route['report/reportproduct'] ='report/reportproduct/view';
$route['report/reportorder'] ='report/reportorder/view';
