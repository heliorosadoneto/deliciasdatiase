<?php

namespace src\controllers;

use \core\Controller;
use core\Request;
use src\models\Conta;

class ContasPagarController extends Controller
{
    public function index()
    {
        session_start();
        if(!isset($_SESSION['id'])){
            $this->redirect('/login');
        }
        $dados = Conta::select()
            ->get();
        $this->render('contaspagar', [
            'dados' => $dados
        ]);
    }

    public function add()
    {
        $descricao = filter_input(INPUT_POST, 'descricao');
        $valor = filter_input(INPUT_POST, 'valor');
        $vencimento = filter_input(INPUT_POST, 'vencimento');
        if (isset($descricao) && isset($valor) && isset($vencimento)) {

            Conta::insert([
                'descricao' => $descricao,
                'valor' => $valor,
                'vencimento' => $vencimento
            ])->execute();
            $this->redirect('/contaspagar');
        } else {
        };
    }

    public function edit($id)
    {
        Conta::update()
            ->set('tipo', 1)
            ->where('id', $id)
            ->execute();
        $this->redirect('/contaspagar');
    }

    public function show()
    {
        $dataInicio = $_GET['dataInicio'] ?? null;
        $dataFinal = $_GET['dataFinal'] ?? null;
        $typo = $_GET['tipo'] ?? null;

        $pesquisas = Conta::select()
        ->where('tipo',$typo)
        ->where('vencimento', '>=', $dataInicio)
        ->where('vencimento', '<=', $dataFinal)
        ->get();

        $this->render('contaspagar', [
            'pesquisas' => $pesquisas,
        ]);
    }
}
