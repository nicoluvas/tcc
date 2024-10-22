<?php

namespace App\Controllers\Docente;
use Core\Controller\Controller;
use App\Models\Docente\DocenteGerenciamento;
use App\Models\Docente\DocenteDocente;

class DocenteGerenciamentoController extends Controller {
    protected $professores;
    protected $turmas;
    protected $materias;
    protected $professor_materia;
    protected $cargo;
    protected $faltas;

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

    public function PeriodoLetivo() {
        $this->render('periodoLetivo', 'DocenteLayout', 'Docente/Gerenciamento');
    }
    
    public function Materias() {
        $DocenteDocente = new DocenteDocente();
        $DocenteGerenciamento = new DocenteGerenciamento();

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->professores = $DocenteDocente->GetProfessores();
            $this->turmas = $DocenteGerenciamento->GetTurmas();
            $this->materias = $DocenteGerenciamento->GetMaterias();
            $professor_materia = [];
            foreach ($this->turmas as $turma){
                $professor_materia[$turma->cd_turma] = [];
            }
            $aux = $DocenteGerenciamento->GetProfessorMateria();
            foreach ($professor_materia as $t => $m) {
                foreach ($aux as $pm) {
                    if ($pm->id_turma != $t) continue;
                    $professor_materia[$t][$pm->id_materia] = $pm->id_docente;
                }
            }

            $this->professor_materia = $professor_materia;
            $this->render('materias', 'DocenteLayout', 'Docente/Gerenciamento');
            die();
        }

        $DocenteGerenciamento->AlterarProfessorMateria();
    }

    public function Faltas() {
        $DocenteGerenciamento = new DocenteGerenciamento();

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->faltas = $DocenteGerenciamento->GetFaltas();
            $this->render('faltas', 'DocenteLayout', 'Docente/Gerenciamento');
            die();
        }
    }

    public function JustificarFalta() {
        $DocenteGerenciamento = new DocenteGerenciamento();
        $DocenteGerenciamento->JustificarFalta($_POST['aluno'], $_POST['periodo'], $_POST['aula']);
        echo json_encode(['msg' => 'Falta justificada']);
    }
}
