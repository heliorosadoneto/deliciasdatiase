<?php

namespace src\handlers;

use src\models\User;

class LoginHandlers
{

    /**
     * Summary of VerifyLogin
     * @param string $email
     * @param int $senha
     * @return bool
     */





    public static function VerifyLogin($email, $senha)
    {
        $user = User::select()
            ->where('email', $email)
            ->where('senha', $senha)
            ->execute();
        if (count($user) > 0) {
            foreach ($user as $users) {
                session_start();
                $_SESSION['id'] = $users['id'];


                $urlHttp = self::getUrlHttp();
                if($urlHttp){
                    header("location: $urlHttp/mvc/public/");

                }else{
                    header("location: $urlHttp/");
                }
                exit;

                /*$caminho_http = 'http';

                if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
                    $caminho_http .= 's';
                }

                $caminho_http .= '://' . $_SERVER['HTTP_HOST'];

                header("Location: $caminho_http/mvc/public/");
                exit;*/
            }
        } else {
            $urlHttp = self::getUrlHttp();
            if($urlHttp){
                header("location: $urlHttp/mvc/public/");

            }else{
                header("location: $urlHttp/");
            }
        }
    }
    public static function getUrlHttp()
    {
        $caminho_http = 'http';
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            $caminho_http .= 's';
        }
        $caminho_http .= '://' . $_SERVER['HTTP_HOST'];
        return $caminho_http;
    }
}
