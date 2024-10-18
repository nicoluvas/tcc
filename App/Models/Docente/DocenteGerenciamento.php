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
}
