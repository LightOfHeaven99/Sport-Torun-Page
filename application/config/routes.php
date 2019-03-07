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
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'user/login';
$route['logged'] = 'user/login_post';
$route['registration'] = 'user/registration';
$route['logout'] = 'user/logout';
$route['accountactivation'] = 'user/activate_account';

$route['changedisplaylogin'] = 'user/change_display_login';
// $route['nametologin'] = 'user/change_display_to_login';
// $route['logintoname'] = 'user/change_display_to_name';

$route['mailsent'] = 'mailer/send_contact';
$route['teamsent'] = 'mailer/send_team';
$route['codesent'] = 'user/send_reset_code';

$route['admin-panel'] = 'pages/admin/admin-panel';
$route['news-panel'] = 'pages/admin/news-panel';
$route['matches-panel'] = 'pages/admin/matches-panel';
$route['teams-panel'] = 'pages/admin/teams-panel';
$route['players-panel'] = 'pages/admin/players-panel';
$route['multimedia-panel'] = 'pages/admin/multimedia-panel';
$route['users-panel'] = 'pages/admin/users-panel';
$route['back'] = 'pages/view/login';

$route['usersdeleted'] = 'pages/admin/admin-panel';
$route['fileuploaded'] = 'upload/do_upload';
$route['newsadded'] = 'news/add_news';
$route['newsdeleted/(:num)'] = 'news/remove_news/$1';

$route['forumadded'] = 'forum/add_advertisement';

$route['(:any)'] = 'pages/view/$1';
$route['(:any)/(:any)'] = 'pages/view/$1/$2';
$route['(:any)/(:any)/(:any)'] = 'pages/view/$1/$2/$3';
