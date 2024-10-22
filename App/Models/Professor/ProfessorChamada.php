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

    public function CadastrarAula() {
        $sql = "INSERT INTO
                    tb_aula
                SET
                    ds_aula = :ds,
                    id_materia = :materia,
                    id_turma = :turma";
        $params = [
            'ds' => $_POST['ds_aula'],
            'materia' => $_POST['materia'],
            'turma' => $_POST['turma']
        ];
        $this->executeStatement($sql, $params);
        return $this->db->lastInsertId();
    }

    public function Chamada($idaula) {
        // var_dump($_GET);
        $faltas = [];
        foreach ($_POST as $name => $input) {
            if (preg_match('/falta-[0-9]+-[1-3]/', $name)) {
                $aux = explode('-', $name);
                $faltas[] = $aux[1];
            }
        }
        foreach ($faltas as $matricula) {
            $sql = "INSERT INTO
                        tb_falta
                    SET
                        id_aula = :aula,
                        id_periodo_letivo = :periodo,
                        id_matricula = :matricula";
            $params = [
                'aula' => $idaula,
                'periodo' => ID_PERIODO_LETIVO,
                'matricula' => $matricula
            ];
            $this->executeStatement($sql, $params);
        }
    }
}
