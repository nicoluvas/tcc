<?php

namespace App\Models\Aluno;
use Core\Model\Model;

class Aluno extends Model {
    public function GetMaterias($periodo) {
        $turma = $this->executeStatement('SELECT id_turma FROM tb_matricula_turma WHERE id_matricula = :id_aluno AND id_periodo_letivo = :id_periodo', ['id_aluno' => $_SESSION['logged']['id'], 'id_periodo' => defined('ID_PERIODO_LETIVO') ? ID_PERIODO_LETIVO :  $periodo])->fetch()->id_turma;

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

    public function GetFrequenciaMateria($materia, $unidade, $periodo) {
        $turma = $this->executeStatement('SELECT id_turma FROM tb_matricula_turma WHERE id_matricula = :id_aluno AND id_periodo_letivo = :id_periodo', ['id_aluno' => $_SESSION['logged']['id'], 'id_periodo' => defined('ID_PERIODO_LETIVO') ? ID_PERIODO_LETIVO :  $periodo])->fetch()->id_turma;
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
        $frequencia->frequencia = $this->executeStatement($sql, ['id_aluno' => $_SESSION['logged']['id'], 'id_periodo' => defined('ID_PERIODO_LETIVO') ? ID_PERIODO_LETIVO :  $periodo, 'unidade' => $unidade, 'id_materia' => $materia, 'id_turma' => $turma])->fetch()->frequencia;

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
        $frequencia->frequencia_total = $this->executeStatement($sql, ['id_aluno' => $_SESSION['logged']['id'], 'id_periodo' => defined('ID_PERIODO_LETIVO') ? ID_PERIODO_LETIVO :  $periodo, 'id_turma' => $turma, 'id_materia' => $materia])->fetch()->frequencia;

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
        $frequencia->faltas_unidade = $this->executeStatement($sql, ['id_aluno' => $_SESSION['logged']['id'], 'id_periodo' => defined('ID_PERIODO_LETIVO') ? ID_PERIODO_LETIVO :  $periodo, 'id_materia' => $materia, 'unidade' => $unidade])->fetch()->faltas;

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
        $frequencia->faltas_total = $this->executeStatement($sql, ['id_aluno' => $_SESSION['logged']['id'], 'id_periodo' => defined('ID_PERIODO_LETIVO') ? ID_PERIODO_LETIVO :  $periodo, 'id_materia' => $materia])->fetch()->faltas;

        return $frequencia;
    }

    public function GetFaltas($unidade, $periodo) {
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
        return $this->executeStatement($sql, ['id_matricula' => $_SESSION['logged']['id'], 'id_periodo' => defined('ID_PERIODO_LETIVO') ? ID_PERIODO_LETIVO :  $periodo, 'unidade' => $unidade])->fetchAll();
    }

    public function GetNotas($materia, $unidade, $periodo) {
        $sql = "SELECT
                    *
                FROM
                    tb_nota
                INNER JOIN
                    tb_materia
                    ON
                        cd_materia = id_materia
                WHERE
                    id_periodo_letivo = :id_periodo AND
                    id_matricula = :id_matricula AND
                    id_materia = :id_materia AND
                    unidade = :unidade
                ORDER BY
                    peso_nota, unidade";
        $nota = $this->executeStatement($sql, ['unidade' => $unidade, 'id_periodo' => defined('ID_PERIODO_LETIVO') ? ID_PERIODO_LETIVO :  $periodo, 'id_matricula' => $_SESSION['logged']['id'], 'id_materia' => $materia])->fetchAll();
        
        $sql = "SELECT
                    SUM(valor_nota * peso_nota) / SUM(peso_nota) as media_final
                FROM
                    tb_nota
                WHERE
                    id_periodo_letivo = :id_periodo AND
                    id_matricula = :id_matricula AND
                    id_materia = :id_materia";
        $media_final = $this->executeStatement($sql, ['id_periodo' => defined('ID_PERIODO_LETIVO') ? ID_PERIODO_LETIVO :  $periodo, 'id_matricula' => $_SESSION['logged']['id'], 'id_materia' => $materia])->fetch()->media_final;
        return (object) ['cd_materia' => $nota[0]->id_materia, 'nm_materia' => $nota[0]->nm_materia, 'trabalho' => $nota[0]->valor_nota, 'prova' => $nota[1]->valor_nota, 'unidade' => $unidade, 'media_final' => $media_final];
    }

    public function AnosEstudados() {
        return $this->executeStatement('SELECT id_periodo_letivo, inicio FROM tb_periodo_letivo INNER JOIN tb_matricula ON cd_periodo_letivo = id_periodo_letivo WHERE id_aluno = :aluno AND inicio is not null', ['aluno' => $_SESSION['logged']['id']])->fetchAll();
    }
}
