<?php
namespace src\controllers;

use \core\Controller;
use src\models\Vendas;

class VendasController extends Controller {

    public function index() {
        $this->render('vendas');
    }


}