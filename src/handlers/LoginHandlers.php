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
        if(count($user) > 0){
            return true;
        }
        return false;
    }
}