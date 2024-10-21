<?php

namespace App\Controllers\Docente;
use Core\Controller\Controller;

class DocenteController extends Controller {
    protected $cargo;

    public function __construct() {
        if(!isset($_SESSION['logged']) || $_SESSION['logged']['tipo'] != 'docente'){
            header('Location: /login');
            die();
        }
        $this->cargo = $_SESSION['logged']['cargo'];
        if ($this->cargo < 3) {
            header('Location: /login');
            die();
        }
    }
    
    public function Dashboard(){
        if (empty($_GET)) {
            $this->render('Index', 'DocenteLayout', 'Docente');
            die();
        }

        $this->render($_GET['tab'], 'DocenteLayout', 'Docente');
    }
}
?>