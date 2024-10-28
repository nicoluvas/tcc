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
        for ($i=1;$i<=$_POST['qt_aulas'];$i++) {
            $sql = "INSERT INTO
                        tb_aula
                    SET
                        ds_aula = :ds,
                        id_materia = :materia,
                        id_turma = :turma,
                        unidade = :unidade,
                        id_periodo_letivo = :periodo";
            $params = [
                'ds' => $_POST['ds_aula'],
                'materia' => $_POST['materia'],
                'turma' => $_POST['turma'],
                'unidade' => UNIDADE,
                'periodo' => ID_PERIODO_LETIVO
            ];
            $this->executeStatement($sql, $params);
            $this->Chamada($this->db->lastInsertId(), $i, $_POST['turma']);
        }
    }

    public function Chamada($idaula, $num_aula, $turma) {
        $faltas = [];
        foreach ($_POST as $name => $input) {
            if (preg_match("/falta-[0-9]+-[$num_aula]/", $name)) {
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
                        id_matricula = :matricula,
                        unidade = :unidade,
                        id_turma = :turma";
            $params = [
                'aula' => $idaula,
                'periodo' => ID_PERIODO_LETIVO,
                'matricula' => $matricula,
                'unidade' => UNIDADE,
                'turma' => $turma
            ];
            $this->executeStatement($sql, $params);
        }
    }
}
