<?php

namespace App\Models\Aluno;
use Core\Model\Model;

class Aluno extends Model {
    public function GetMaterias() {
        $turma = $this->executeStatement('SELECT id_turma FROM tb_matricula_turma WHERE id_matricula = :id_aluno AND id_periodo_letivo = :id_periodo', ['id_aluno' => $_SESSION['logged']['id'], 'id_periodo' => ID_PERIODO_LETIVO])->fetch()->id_turma;

        $sql = "SELECT
                    *
                FROM
                    tb_turma
                INNER JOIN
                    tb_turma_materia
                    ON
                        id_turma = cd_turma
                INNER JOIN
                    tb_materia
                    ON
                        cd_materia = id_materia
                WHERE
                    cd_turma = :cd_turma";
        return $this->executeStatement($sql, ['cd_turma' => $turma])->fetchAll();
    }

    public function GetFrequenciaMateria($materia, $unidade) {
        $turma = $this->executeStatement('SELECT id_turma FROM tb_matricula_turma WHERE id_matricula = :id_aluno AND id_periodo_letivo = :id_periodo', ['id_aluno' => $_SESSION['logged']['id'], 'id_periodo' => ID_PERIODO_LETIVO])->fetch()->id_turma;
        $frequencia = new \stdClass;
        $frequencia->nm_materia = $this->executeStatement('SELECT nm_materia FROM tb_materia WHERE cd_materia = :cd_materia', ['cd_materia' => $materia])->fetch()->nm_materia;
        
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
                            tb_aula.id_periodo_letivo = :id_periodo AND
                            tb_aula.unidade = :unidade AND
                            id_materia = :id_materia AND
                            tb_falta.id_turma = :id_turma AND
                            st_falta like 'A') 
                        /
                        (SELECT 
                            count(*) 
                        FROM
                            tb_aula 
                        WHERE 
                            id_periodo_letivo = :id_periodo AND
                            unidade = :unidade AND
                            id_materia = :id_materia AND
                            id_turma = :id_turma)
                    AS frequencia";
        $frequencia->frequencia = $this->executeStatement($sql, ['id_aluno' => $_SESSION['logged']['id'], 'id_periodo' => ID_PERIODO_LETIVO, 'unidade' => $unidade, 'id_materia' => $materia, 'id_turma' => $turma])->fetch()->frequencia;

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
                            tb_aula.id_periodo_letivo = :id_periodo AND
                            id_materia = :id_materia AND
                            tb_falta.id_turma = :id_turma AND
                            st_falta like 'A') 
                        /
                        (SELECT 
                            count(*) 
                        FROM
                            tb_aula 
                        WHERE 
                            id_periodo_letivo = :id_periodo AND
                            id_turma = :id_turma AND
                            id_materia = :id_materia)
                    AS frequencia";
        $frequencia->frequencia_total = $this->executeStatement($sql, ['id_aluno' => $_SESSION['logged']['id'], 'id_periodo' => ID_PERIODO_LETIVO, 'id_turma' => $turma, 'id_materia' => $materia])->fetch()->frequencia;

        $sql = 'SELECT 
                    count(*) as faltas
                FROM 
                    tb_falta
                INNER JOIN
                    tb_aula
                    ON
                        id_aula = cd_aula
                WHERE 
                    id_matricula = :id_aluno AND
                    id_materia = :id_materia AND 
                    tb_aula.unidade = :unidade AND 
                    tb_aula.id_periodo_letivo = :id_periodo';
        $frequencia->faltas_unidade = $this->executeStatement($sql, ['id_aluno' => $_SESSION['logged']['id'], 'id_periodo' => ID_PERIODO_LETIVO, 'id_materia' => $materia, 'unidade' => $unidade])->fetch()->faltas;

        $sql = 'SELECT 
                    count(*) as faltas
                FROM 
                    tb_falta
                INNER JOIN
                    tb_aula
                    ON
                        id_aula = cd_aula
                WHERE 
                    id_matricula = :id_aluno AND
                    id_materia = :id_materia AND
                    tb_aula.id_periodo_letivo = :id_periodo';
        $frequencia->faltas_total = $this->executeStatement($sql, ['id_aluno' => $_SESSION['logged']['id'], 'id_periodo' => ID_PERIODO_LETIVO, 'id_materia' => $materia])->fetch()->faltas;

        return $frequencia;
    }

    public function GetFaltas($unidade) {
        $sql = "SELECT
                    *
                FROM
                    tb_falta
                INNER JOIN
                    tb_aula
                    ON
                        id_aula = cd_aula
                INNER JOIN
                    tb_materia
                    ON
                        id_materia = cd_materia
                WHERE
                    id_matricula = :id_matricula AND
                    tb_aula.id_periodo_letivo = :id_periodo AND
                    tb_aula.unidade = :unidade";
        return $this->executeStatement($sql, ['id_matricula' => $_SESSION['logged']['id'], 'id_periodo' => ID_PERIODO_LETIVO, 'unidade' => $unidade])->fetchAll();
    }
}
