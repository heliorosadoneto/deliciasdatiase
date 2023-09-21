<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller
{

    public function index()
    {
        $this->render('home');
    }

    public function add()
    {
        header("Access-Control-Allow-Headers: Content-type");
        header("Access-Control-Allow-Methods: POST, GET");
        header("Access-Control-Allow-Headers: *");
        header('Content-Type: application/json');
        $data = json_decode(file_get_contents('php://input'));
        echo $data;

    }
}