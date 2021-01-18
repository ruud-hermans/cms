<?php

$router->get('', 'UserController@index');
// $router->get('', 'PagesController@home');

$router->get('user', 'PagesController@userpage');
$router->get('upload', 'PagesController@upload');
$router->get('administrator', 'PagesController@administrator');

$router->post('login', 'LoginController@login');

$router->post('register', 'UserController@register');
$router->post('updateUserEmail', 'UserController@updateUserEmail');