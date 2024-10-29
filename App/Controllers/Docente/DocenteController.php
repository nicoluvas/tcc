<?php

namespace App\Controllers\Docente;
use Core\Controller\Controller;
use App\Models\Docente\DocenteAluno;
use App\Models\Docente\DocenteDocente;
use App\Models\Docente\DocenteGerenciamento;
use App\Models\Contatos;

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
    
    protected $media_notas;
    protected $media_frequencia;
    protected $solicitacoes;
    public function Dashboard(){
        if (empty($_GET)) {
            $DocenteGerenciamento = new DocenteGerenciamento();
            $Contatos = new Contatos();
            $this->solicitacoes = $Contatos->GetSolicitacoes();

            $this->media_notas = $DocenteGerenciamento->MediaNotas();
            $this->media_frequencia = $DocenteGerenciamento->MediaFrequencia();
            $this->render('Index', 'DocenteLayout', 'Docente');
            die();
        }

        $this->render($_GET['tab'], 'DocenteLayout', 'Docente');
    }

    public function FecharContato() {
        $Contatos = new Contatos();
        $Contatos->FecharContato($_POST['contato']);
        echo json_encode(['ok' => true]);
    }

    public function AlterarSenha($tipo, $cd)  {
        if ($tipo == 'd') {
            $senha = (new DocenteDocente)->AlterarSenha($cd);
        } else if ($tipo == 'a') {
            $senha = (new DocenteAluno)->AlterarSenha($cd);
        }
        echo json_encode(['senha' => $senha]);
    }
}
