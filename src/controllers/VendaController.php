<?php
namespace src\controllers;

use \core\Controller;
use src\models\Venda;


class VendaController extends Controller
{

    public function index()
    
    {
        session_start();
        if(!isset($_SESSION['id'])){
            $this->redirect('/login');
        }
        $this->render('vendas');
    }

    public function read()
    {
        $dataInicio = filter_input(INPUT_GET,'dataInicio');
        $dataFinal = filter_input(INPUT_GET,'dataFinal');
        $store = Venda::select()->
            where('data', '>=', $dataInicio)->
            where('data', '<=', $dataFinal)
            ->get();
                $this->render('vendas',[
                    'stores' => $store
                ]);
        
    }

}