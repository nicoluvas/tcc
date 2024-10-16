<?php

namespace App\Controllers\Docente;
use Core\Controller\Controller;
use App\Models\Docente\DocenteDocente;

class DocenteDocenteController extends Controller {
    protected $cargo;
    protected $docentes;

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

    public function CadastrarDocente() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->render('CadastrarDocente', 'DocenteLayout', 'Docente/Docente');
            die();
        }

        $DocenteDocente = new DocenteDocente();
        $DocenteDocente->CadastrarDocente();
    }

    public function ListarDocente() {
        $DocenteDocente = new DocenteDocente();
        $this->docentes = $DocenteDocente->ListarDocentes();

        $this->render('ListarDocente', 'DocenteLayout', 'Docente/Docente');
    }
}
