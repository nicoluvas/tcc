<?php

namespace App\Controllers\Login;
use Needs\Controller\Controller;
use App\Models\Login;

class LoginController extends Controller {
    public function index(){
        return $this->render('login', 'login');
    }

    public function auth(){
        $Login = new Login();

        if(
                !isset($_POST['usuario']) ||
                !isset($_POST['codigo-acesso']) ||
                !isset($_POST['entrar'])
            ) {
            //header('Location: /login');
            //die();
        }

        $usuario = $_POST['usuario']??'lemelinha';
        $codigo_acesso = $_POST['codigo-acesso']??'12345';
        
        $Login->authLogin($usuario, $codigo_acesso);
    }
}
