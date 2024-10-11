<?php

namespace App\Controllers\Docente;
use Core\Controller\Controller;
use App\Models\Docente\DocenteAluno;
use App\Models\Docente\DocenteGerenciamento;

class DocenteAlunoController extends Controller {
    protected $cargo;
    protected $turmas;
    protected $alunos;
    protected $aluno;
    public function __construct() {
        if(!isset($_SESSION['logged']) || $_SESSION['logged']['tipo'] != 'docente'){
            header('Location: /login');
            die();
        }
        $this->cargo = $_SESSION['logged']['cargo'];
    }
    
    public function CadastrarAluno() {
        if ($this->cargo < 3) {
            header('Location: /login');
            die();
        }
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->render('CadastrarAluno', 'DocenteLayout', 'Docente/Alunos');
            die();
        }

        $DocenteAluno = new DocenteAluno();
        $DocenteAluno->CadastrarAluno();
    }

    public function AlunosGeral() {
        if ($this->cargo < 3) {
            header('Location: /login');
            die();
        }
        $DocenteGerenciamento = new DocenteGerenciamento();
        $this->turmas = $DocenteGerenciamento->GetTurmas();
        $DocenteAluno = new DocenteAluno();
        $this->alunos = $DocenteAluno->GetAlunosGeral();

        $this->render('AlunosGeral', 'DocenteLayout', 'Docente/Alunos');
    }

    public function AlunosPorTurma($turma) {
        if ($this->cargo < 3) {
            header('Location: /login');
            die();
        }
    }

    public function AlunoInfo($idaluno) {
        if ($this->cargo < 3) {
            header('Location: /login');
            die();
        }
        $DocenteAluno = new DocenteAluno();
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->aluno = $DocenteAluno->GetAluno($idaluno);
            $this->render('AlunoInfo', 'DocenteLayout', 'Docente/Alunos');
            die();
        }

        $DocenteAluno->AtualizarAluno($idaluno);
    }
}
