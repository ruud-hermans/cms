<?php



$router->get('', 'UserController@index');

$router->get('', 'PagesController@home');
$router->get('user', 'PagesController@userpage');
$router->get('upload', 'PagesController@upload');
$router->get('administrator', 'PagesController@administrator');

// $router->post('users', 'UserController@store'); 





