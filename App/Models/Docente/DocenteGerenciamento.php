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

    public function GetMaterias() {
        $sql = "SELECT
                    *
                FROM
                    tb_materia";
        return $this->executeStatement($sql)->fetchAll();
    }
}
