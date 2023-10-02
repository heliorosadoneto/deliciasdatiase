<?php

namespace src\handlers;

class CheckLogin
{
    public static function isLogged()
    {
        // Inicie a sessão (se ainda não estiver iniciada)
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
            // Verifique se a variável de sessão 'user_id' está definida
            
            isset($_SESSION['user_id']);
            return true;
        }
        return false;


    }
}