<?php

namespace App\Controllers\Docente;
use Core\Controller\Controller;
use App\Models\Docente\DocenteAluno;
use App\Models\Docente\DocenteGerenciamento;
use App\Tools\Tools;

class DocenteAlunoController extends Controller {
    protected $cargo;
    protected $turmas;
    protected $turma;
    protected $alunos;
    protected $aluno;
    
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
    
    public function CadastrarAluno() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->render('CadastrarAluno', 'DocenteLayout', 'Docente/Alunos');
            die();
        }

        $DocenteAluno = new DocenteAluno();
        $DocenteAluno->CadastrarAluno();
    }

    public function AlunosGeral() {
        $DocenteGerenciamento = new DocenteGerenciamento();
        $this->turmas = $DocenteGerenciamento->GetTurmas();
        $DocenteAluno = new DocenteAluno();
        $this->alunos = $DocenteAluno->GetAlunosGeral();

        $this->render('AlunosGeral', 'DocenteLayout', 'Docente/Alunos');
    }

    public function AlunosPorTurma($turma) {
        $DocenteGerenciamento = new DocenteGerenciamento();
        $this->turma = $DocenteGerenciamento->GetTurmas()[$turma-1]->nm_turma;
        $DocenteAluno = new DocenteAluno();
        $this->alunos = $DocenteAluno->GetAlunosTurma($turma);
        $this->render('AlunosTurma', 'DocenteLayout', 'Docente/Alunos');
    }

    public function AlunoInfo($idaluno) {
        $DocenteAluno = new DocenteAluno();
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->aluno = $DocenteAluno->GetAluno($idaluno);
            $this->render('AlunoInfo', 'DocenteLayout', 'Docente/Alunos');
            die();
        }

        $DocenteAluno->AtualizarAluno($idaluno);
    }

    public function CancelarMatricula($aluno) {
        $DocenteAluno = new DocenteAluno();
        $DocenteAluno->CancelarMatricula($aluno);
        die();
    }
}
