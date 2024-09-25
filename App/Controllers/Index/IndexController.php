<?php

namespace App\Controllers\Index;

use App\Models\Login as ModelsLogin;
use Core\Controller\Controller;
use App\Models\Login;

class IndexController extends Controller {
    public function index(){
        $this->renderView('index', 'Index');
    }

    public function LoginPage() {
        $this->renderView('login', 'Login');
    }

    // o trio estático
    public function Info() {
        $this->renderView('info', 'Info');
    }
    public function Contato() {
        $this->renderView('contato', 'Contato');
    }
    public function Metodo() {
        $this->renderView('metodo', 'Metodo');
    }

    /////

    public function LoginAuth() {
        if (empty($_POST) || !(isset($_POST['codigo']) && isset($_POST['senha']))) {
            $_SESSION['msg'] = 'Algo deu errado';
            header('Location: /login');
            die();
        }
        $codigo_acesso = $_POST['codigo']??'';
        $senha = $_POST['senha']??'';
        $LoginModel = new Login();

        if ($LoginModel->LoginAuth($codigo_acesso, $senha)) {
            header("Location: /{$_SESSION['logged']['tipo']}/home");
            die();
        }

        echo $_SESSION['msg'];
        die();
        header('Location: /login');
    }

    public function Logout() {
        unset($_SESSION['logged']);
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 84000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
        header('Location: /');
        die();
    }
}
