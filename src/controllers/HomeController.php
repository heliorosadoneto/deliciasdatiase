<?php
namespace src\controllers;


use \core\Controller;
use src\models\Venda;

class HomeController extends Controller
{

    public function index()
    {
        $this->render('home');
    }

    public function add()
    {
        $venda = new Venda;
        $inputJSON = file_get_contents('php://input');
        $data = json_decode($inputJSON, true);
        
    

        if(isset($data)){
            foreach ($data as $valor){
                $venda->insert([
                    'produto' => addslashes($valor['produto']),
                    'preco' => addslashes($valor['preco']),
                    'data_time' => date('Y-m-d H:i:s')
                ])->execute();
            }
        }



    }
}
?>