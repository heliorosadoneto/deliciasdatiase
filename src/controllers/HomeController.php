<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\CheckLogin;
use src\handlers\LoginHandlers;
use src\models\Venda;


class HomeController extends Controller
{
    private $loggedUser;

    public function __construct()
    {
        $loggedUser =  LoginHandlers::VerifyLogin();
         if($loggedUser === false){
             $this->redirect('/login');
         }
        
        
        

        


    }

    public function index()
    {
        $this->render('home');
    }



    public function add()
    {
        $venda = new Venda;
        $inputJSON = file_get_contents('php://input');
        $data = json_decode($inputJSON, true);


        if (isset($data)) {

            foreach ($data as $valor) {
                $somaValorProduto = $valor['quantidade'] * $valor['preco'];
                $venda->insert([
                    'un' => $valor['quantidade'],
                    'produto' => addslashes($valor['produto']),
                    'preco' => addslashes($somaValorProduto),
                    'data' => date('Y-m-d'),
                    'hora' => date('H:i:s')
                ])->execute();
            }
        }



    }

}
?>