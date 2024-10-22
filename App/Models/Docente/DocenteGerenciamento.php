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

    public function GetProfessorMateria() {
        $sql = "SELECT
                    *
                FROM
                    tb_turma_materia";
        return $this->executeStatement($sql)->fetchAll();
    }

    public function AlterarProfessorMateria() {
        try {
            $this->db->beginTransaction();
            $sql = "UPDATE
                        tb_turma_materia
                    SET
                        id_docente = :docente
                    WHERE
                        id_turma = :turma AND
                        id_materia = :materia";
            $params = [
                'docente' => $_POST['professor'],
                'turma' => $_POST['turma'],
                'materia' => $_POST['materia']
            ];
            $this->executeStatement($sql, $params);
            $this->db->commit();
            echo json_encode(['ok' => true, 'msg' => 'Alteração feita com sucesso']);
        } catch (\Throwable $th) {
            $this->db->rollBack();
            echo json_encode(['ok' => true, 'msg' => 'Algo deu errado']);
        }
    }

    public function GetFaltas() {
        $sql =  "SELECT
                    *
                FROM
                    tb_aluno
                INNER JOIN
                    tb_falta
                    ON
                        cd_aluno = id_matricula
                INNER JOIN
                    tb_aula
                    ON
                        cd_aula = id_aula
                INNER JOIN
                    tb_materia
                    ON
                        cd_materia = id_materia
                WHERE
                    id_periodo_letivo = :periodo AND
                    st_falta = 'A'
                GROUP BY
                    id_matricula, id_aula
                ORDER BY
                    dt_aula DESC";
        $params = [
            'periodo' => ID_PERIODO_LETIVO
        ];
        return $this->executeStatement($sql, $params)->fetchAll();
    }

    public function JustificarFalta($aluno, $periodo, $aula) {
        $sql = "UPDATE
                    tb_falta
                SET
                    st_falta = 'J'
                WHERE
                    id_matricula = :aluno AND
                    id_periodo_letivo = :periodo AND
                    id_aula = :aula";
        $params = [
            'aluno' => $aluno,
            'periodo' => $periodo,
            'aula' => $aula
        ];
        $this->executeStatement($sql, $params);
    }
}
