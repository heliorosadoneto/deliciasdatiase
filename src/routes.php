<?php
use core\Router;

$router = new Router();

// rota de pagina inicial 

$router->get('/', 'HomeController@index');
$router->post('/salvar', 'HomeController@add');

// rota de pagina de vendas

$router->get('/vendas', 'VendaController@index');
$router->get('/read', 'VendaController@read');

// contas a pagar

$router->get('/contaspagar', 'ContasPagarController@index');



$router->get('/login', 'LoginController@singnin');
$router->get('/sair', 'LoginController@sair');
$router->post('/login','LoginController@singninAction');
$router->get('/cadastro', 'LoginController@singup');