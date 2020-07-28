<?php 

$router->get('', 'PagesController@index');

$router->get('admin/questions', 'QuestionsController@questions');
$router->get('admin/create_question', 'QuestionsController@create_question');
$router->post('admin/create_question', 'QuestionsController@store_question');
$router->get('admin/edit_question', 'QuestionsController@edit_question');
$router->post('admin/edit_question', 'QuestionsController@update_question');
$router->get('admin/delete_question', 'QuestionsController@delete_question');

$router->get('admin/create_answer', 'AnswersController@create_answer');
$router->post('admin/create_answer', 'AnswersController@store_answer');
$router->get('admin/edit_answer', 'AnswersController@edit_answer');
$router->post('admin/edit_answer', 'AnswersController@update_answer');

$router->get('admin/courses', 'CoursesController@courses');
$router->get('admin/delete_course', 'CoursesController@delete_course');
$router->post('admin/edit_course', 'CoursesController@update_course');
$router->get('admin/edit_course', 'CoursesController@edit_course');
$router->post('admin/create_course', 'CoursesController@store');
$router->get('admin/create_course', 'CoursesController@create_course');

$router->get('admin/home', 'AdminController@home');
$router->get('admin/delete_user', 'AdminController@delete_user');
$router->post('admin/edit_user', 'AdminController@update_user');
$router->get('admin/edit_user', 'AdminController@edit_user');
$router->post('admin/create_user', 'AdminController@store_user');
$router->get('admin/create_user', 'AdminController@create_user');

$router->post('admin/login', 'AdminController@login');
$router->get('admin/login', 'AdminController@getLogin');
$router->get('admin/logout', 'AdminController@logout');

$router->post('register', 'UsersController@store');
$router->post('login', 'UsersController@signin');
$router->get('login', 'UsersController@login');
$router->get('register', 'UsersController@register');
$router->get('home', 'UsersController@home');





	
	