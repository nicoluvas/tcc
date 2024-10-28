<?php

namespace App\Models\Aluno;
use Core\Model\Model;

class Aluno extends Model {
    public function GetMaterias() {
        $turma = $this->executeStatement('SELECT cd_turma FROM tb_matricula_turma WHERE id_matricula = :aluno AND id_periodo_letivo = :periodo', ['aluno' => $_SESSION['logged']['id'], 'periodo' => ID_PERIODO_LETIVO])->fetch()->cd_turma;

        $sql = "SELECT
                    *
                FROM
                    ";
    }

    public function GetFrequenciaMateria($materia) {
        $turma = $this->executeStatement('SELECT cd_turma FROM tb_matricula_turma WHERE id_matricula = :aluno AND id_periodo_letivo = :periodo', ['aluno' => $_SESSION['logged']['id'], 'periodo' => ID_PERIODO_LETIVO])->fetch()->cd_turma;
        $sql = "SELECT 
                    1- (SELECT 
                            count(*)
                        FROM 
                            tb_falta 
                        INNER JOIN
                            tb_aula
                            ON
                                cd_aula = id_aula
                        WHERE 
                            id_matricula = :id_aluno AND 
                            tb_aula.id_periodo_letivo = :periodo AND
                            id_materia = :materia AND
                            tb_falta.id_turma = :turma AND
                            st_falta like 'A') 
                        /
                        (SELECT 
                            count(*) 
                        FROM
                            tb_aula 
                        WHERE 
                            id_periodo_letivo = :periodo AND
                            id_turma = :turma AND
                            id_materia = :materia)
                    AS frequencia";
        return $this->executeStatement($sql, ['id_aluno' => $_SESSION['logged']['id'], 'periodo' => ID_PERIODO_LETIVO, 'turma' => $turma, 'materia' => $materia])->fetch()->frequencia;
    }
}
