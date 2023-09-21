<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->post('/home', 'HomeController@add');
$router->get('/vendas', 'VendasController@index');