<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->post('/salvar', 'HomeController@add');
$router->get('/vendas', 'VendaController@index');
$router->get('/read', 'VendaController@read');



$router->get('/login', 'LoginController@singnin');
$router->post('/login','LoginController@singninAction');
$router->get('/cadastro', 'LoginController@singup');