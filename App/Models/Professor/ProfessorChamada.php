<?php

namespace App\Models\Professor;
use Core\Model\Model;

class ProfessorChamada extends Model {
    public function MateriasTurmas($idprofessor) {
        $sql = "SELECT
                    *
                FROM
                    tb_turma_materia
                INNER JOIN
                    tb_materia
                    ON
                        id_materia = cd_materia
                INNER JOIN
                    tb_turma
                    ON
                        id_turma = cd_turma
                WHERE
                    id_docente = :professor";
        return $this->executeStatement($sql, ['professor' => $idprofessor])->fetchAll();
    }
    
    public function Materias($idprofessor) {
        $sql = "SELECT
                    *
                FROM
                    tb_turma_materia
                INNER JOIN
                    tb_materia
                    ON
                        id_materia = cd_materia
                WHERE
                    id_docente = :professor";
        return $this->executeStatement($sql, ['professor' => $idprofessor])->fetchAll();
    }
}
