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
            if ($user) {
                // Inicie a sessão (se ainda não estiver iniciada)
                if (session_status() === PHP_SESSION_NONE) {
                    session_start();
                }
    
                // Defina as informações de login na sessão
                $_SESSION['user_id'] = $user->id;
                $_SESSION['user_email'] = $user->email;
    
                return true;
            } else {
                return false;
            }
    }
}