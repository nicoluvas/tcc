<?php

namespace App\Controllers\Aluno;
use Core\Controller\Controller;
use App\Models\Aluno\Aluno;

class AlunoController extends Controller {
    
    protected $cd;
    protected $nome;
    public function __construct() {
        if(!isset($_SESSION['logged']) || $_SESSION['logged']['tipo'] != 'aluno'){
            header('Location: /login');
            die();
        }
    }
    
    public function Home() {
        $this->render('Home', 'AlunoLayout', 'Aluno');
    }

    public function Aulas() {
        $this->render('Frequencia', 'AlunoLayout', 'Aluno');
    }
}
