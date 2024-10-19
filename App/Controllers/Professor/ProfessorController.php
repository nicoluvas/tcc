<?php

namespace App\Controllers\Professor;
use Core\Controller\Controller;
use App\Models\Docente\DocenteGerenciamento;
use App\Models\Docente\DocenteDocente;

class ProfessorController extends Controller {
    protected $professor_materia;
    protected $professores;
    protected $turmas;
    protected $materias;

    public function Home() {
        $this->render('home', 'ProfessorLayout', 'Professor');
    }

    public function Chamada() {
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
            $this->render('chamada', 'ProfessorLayout', 'Professor');
        }
    }
}
