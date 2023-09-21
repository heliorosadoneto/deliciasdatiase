<?php
use src\controllers\HomeController;

$requist = $_SERVER['REQUIST_URI'];

switch ($requist) {
    case '/salvar_dados':
        $addController = new HomeController;
        $addController->add();
        break;
    
    default:
        echo "404";
        break;
}