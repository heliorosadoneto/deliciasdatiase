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
        header('Content-Type: application/json');
        $data = json_decode(file_get_contents('php://input'));

        if(isset($data)):
            Vendas::insert($data)->execute();
        endif;
       
    }
}