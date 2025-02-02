<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/login','LoginController@signin');
$router->get('/cadastro','LoginController@signup');
$router->post('/login','LoginController@signinAction');
$router->post('/cadastro','LoginController@signupAction');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');