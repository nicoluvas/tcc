<?php

namespace App\Models;
use Needs\Model\Model;

class Login extends Model {
    public function authLogin($usuario, $codigo_acesso){
        var_dump($usuario);
        var_dump($codigo_acesso);
    }
}
