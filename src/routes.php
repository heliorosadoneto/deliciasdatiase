<?php

use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->post('/salvar_dados', 'HomeController@add');
$router->get('/vendas', 'VendasController@index');
