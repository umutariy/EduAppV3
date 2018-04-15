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


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// AppController
$route['index']='appcontroller/index';
$route['signup2']='appcontroller/signup2';
$route['student']='appcontroller/student_dashboard';
$route['child']='appcontroller/view_child';
$route['register']='appcontroller/registration';
$route['login']='appcontroller/login';
$route['logout']='appcontroller/logout';
$route['getStudent']='appcontroller/get_students';
$route['getClass']='appcontroller/getClass';
$route['admin']='appcontroller/adminPage';
$route['parent']='appcontroller/parent_page';

// QuestionController
$route['test']='questioncontroller/set_questions_trial';
$route['students_questions']='questioncontroller/quiz';
$route['answer']='questioncontroller/answer_questions';

// MessageController
$route['message']='messagecontroller/message';
$route['send_message']='messagecontroller/send_message';
$route['view/(:num)']='messagecontroller/view_message/$1';
$route['retrieve_message']='messagecontroller/retrieve_message';

//testing controller
$route['testing']='Unit_testing/index';

