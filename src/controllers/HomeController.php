<?php

namespace src\controllers;

use \core\Controller;
use src\models\Vendas;

class HomeController extends Controller
{

    public function index()
    {
        $this->render('home');
    }

    public function add()
    {
        error_log('Método add chamado');

        $data = json_decode(file_get_contents('php://input'));

        // Imprimir os dados recebidos
        echo json_encode([
            'status' => 'debug',
            'message' => 'Dados recebidos pelo controller',
            'data' => $data
        ]);
    }
}
