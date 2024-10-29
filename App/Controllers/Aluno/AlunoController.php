<?php

namespace App\Controllers\Aluno;
use Core\Controller\Controller;
use App\Models\Aluno\Aluno;
use App\Tools\Tools;

class AlunoController extends Controller {
    protected $frequeciaMaterias;
    protected $materias;
    protected $faltas;
    protected $faltas_unidade;
    protected $faltas_total;
    protected $notas;
    
    public function __construct() {
        if(!isset($_SESSION['logged']) || $_SESSION['logged']['tipo'] != 'aluno'){
            header('Location: /login');
            die();
        }
    }
    
    protected $anos;
    public function Home() {
        $Aluno = new Aluno();
        $this->anos = $Aluno->AnosEstudados();

        $this->render('Home', 'AlunoLayout', 'Aluno');
    }

    public function Aulas($periodo) {
        $Aluno = new Aluno();
        $this->anos = $Aluno->AnosEstudados();
        if (empty(array_filter($this->anos, function($ano) use ($periodo) {
            return $ano->id_periodo_letivo == $periodo;
        }))) {
            require_once ERRO404;
            die();
        }

        $this->materias = $Aluno->GetMaterias($periodo);
        $aux = $Aluno->GetFaltas($_GET['unidade']??UNIDADE, $periodo);

        foreach ($aux as $falta) {
            $this->faltas[$falta->dt_aula][] = $falta;
        }

        foreach ($this->materias as $materia) {
            $this->frequeciaMaterias[$materia->cd_materia] = $Aluno->GetFrequenciaMateria($materia->cd_materia, $_GET['unidade']??UNIDADE, $periodo);
            $this->frequeciaMaterias[$materia->cd_materia]->cd_materia = $materia->cd_materia;
        }
        if (!Tools::isAjax()){
            $this->render('Frequencia', 'AlunoLayout', 'Aluno');
            die();
        }
        //var_dump($this->frequeciaMaterias);
        ob_start();
        $this->renderView('tabelaFrequencia', 'Aluno');
        $frequencia = ob_get_clean();
        ob_start();
        $this->renderView('faltas', 'Aluno');
        $faltas = ob_get_clean();
        echo json_encode(['frequencia' => $frequencia, 'faltas' => $faltas]);
    }

    public function Notas($periodo) {
        $Aluno = new Aluno();

        $this->materias = $Aluno->GetMaterias($periodo);
        
        foreach ($this->materias as $materia) {
            $this->notas[] = $Aluno->GetNotas($materia->cd_materia, $_GET['unidade']??UNIDADE, $periodo);
        }
        if (!Tools::isAjax()){
            $this->render('Notas', 'AlunoLayout', 'Aluno');
            die();
        }
        
        ob_start();
        $this->renderView('tabelaNotas', 'Aluno');
        echo json_encode(['notas' => ob_get_clean()]);
    }
}
