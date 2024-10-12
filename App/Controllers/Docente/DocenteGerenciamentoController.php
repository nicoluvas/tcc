<?php

namespace App\Controllers\Docente;
use Core\Controller\Controller;

class DocenteGerenciamentoController extends Controller {
    public function PeriodoLetivo() {
        $this->render('periodoLetivo', 'DocenteLayout', 'Docente/Gerenciamento');
    }
}
