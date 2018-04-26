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
| When you set this option to TRUE, it will replace ALL dashes with
| underscores in the controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* Routing untuk sesi 1 */
$route['auth']				= 'sesi1/auth';
$route['auth/login']	= 'sesi1/auth/login';
$route['auth/logout']	= 'sesi1/auth/logout';
$route['auth/change_password']				= 'sesi1/auth/change_password';
$route['auth/forgot_password']				= 'sesi1/auth/forgot_password';
$route['auth/reset_password/(:any)'] 	= 'sesi1/auth/reset_password';
$route['auth/activate/(:num)'] 		= 'sesi1/auth/activate/$1';
$route['auth/deactivate/(:num)'] 	= 'sesi1/auth/deactivate/$1';
$route['auth/create_user'] 				= 'sesi1/auth/create_user';
$route['auth/redirectUser'] 			= 'sesi1/auth/redirectUser';
$route['auth/edit_user/(:num)'] 	= 'sesi1/auth/edit_user/$1';
$route['auth/create_group'] 			= 'sesi1/auth/create_group';
$route['auth/edit_group/(:num)'] 	= 'sesi1/auth/edit_group/$1';
$route['auth/_get_csrf_nonce'] 		= 'sesi1/auth/_get_csrf_nonce';
$route['auth/_valid_csrf_nonce'] 	= 'sesi1/auth/_valid_csrf_nonce';
// $route['auth/_render_page'] 			= 'sesi1/auth/_render_page';
