<?php

namespace App\Controllers\Docente;
use Core\Controller\Controller;
use App\Models\Docente\DocenteDocente;

class DocenteDocenteController extends Controller {
    protected $cargo;
    protected $docente;
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
    
    public function DocenteInfo($iddocente) {
        $DocenteDocente = new DocenteDocente();
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->docente = $DocenteDocente->GetDocente($iddocente);
            $this->render('DocenteInfo', 'DocenteLayout', 'Docente/Docente');
            die();
        }

        $DocenteDocente->AtualizarDocente($iddocente);
    }

    public function DesligarDocente($iddocente) {
        if ($iddocente == $_SESSION['logged']['id']) {
            echo json_encode(['ok' => false, 'msg' => 'Você não pode se desligar']);
            die();
        }

        $DocenteDocente = new DocenteDocente();
        $DocenteDocente->DesligarDocente($iddocente);
    }

    public function Perfil() {
        $this->render('DocenteInfo', 'DocenteLayout', 'Docente/Docente');
    }
}
