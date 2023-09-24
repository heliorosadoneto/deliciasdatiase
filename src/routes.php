<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->post('/salvar', 'HomeController@add');
$router->get('/vendas', 'VendasController@index');