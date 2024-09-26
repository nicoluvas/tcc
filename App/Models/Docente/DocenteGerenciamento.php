<?php

namespace App\Models\Docente;
use Core\Model\Model;

class DocenteGerenciamento extends Model {
    public function GetTurmas() {
        $sql = "SELECT 
                    *
                FROM
                    tb_turma";
        $turmas = $this->executeStatement($sql);
        return $turmas->fetchAll();
    }
}
