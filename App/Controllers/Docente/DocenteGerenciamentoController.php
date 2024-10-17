<?php

namespace App\Controllers\Docente;
use Core\Controller\Controller;
use App\Models\Docente\DocenteGerenciamento;
use App\Models\Docente\DocenteDocente;

class DocenteGerenciamentoController extends Controller {
    protected $professores;
    protected $turmas;
    protected $materias;

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

            $this->render('materias', 'DocenteLayout', 'Docente/Gerenciamento');
        }
    }
}
