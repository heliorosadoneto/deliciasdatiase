<?php
namespace src\controllers;
use \core\Controller;
use src\handlers\LoginHandlers;

class LoginController extends Controller
{
    public function singnin(){
        
        $this->render('login');
    }

    public function singninAction(){
        $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST,'senha');
        if($email && $senha){
            $login = LoginHandlers::VerifyLogin($email, $senha);
            if($login === true){
                $this->redirect('/');
            }else{
                $_SESSION['flash'] = 'E-mail e ou senha não conferem';
                $this->redirect('/login');
            }
        }else{
            $_SESSION['flash'] = 'Digite os campos de E-mail e senha novamente';
            $this->redirect('/login');
        }
    }
    public function singnup(){

    }
}
?>