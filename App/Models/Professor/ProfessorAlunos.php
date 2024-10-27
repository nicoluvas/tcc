<?php

namespace App\Models\Professor;
use Core\Model\Model;
use stdClass;

class ProfessorAlunos extends Model {
    public function NotasFrequenciaAluno($turma, $idaluno, $materia, $unidade) {
        $aluno = new stdClass;
        $aluno->nome_aluno = $this->executeStatement('SELECT nome_aluno FROM tb_aluno WHERE cd_aluno = :cd_aluno', ['cd_aluno' => $idaluno])->fetch()->nome_aluno;
        
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
                            tb_aula.unidade = :unidade AND
                            id_materia = :materia AND
                            id_turma = :turma) 
                        /
                        (SELECT 
                            count(*) 
                        FROM
                            tb_aula 
                        WHERE 
                            id_periodo_letivo = :periodo AND
                            unidade = :unidade AND
                            id_materia = :materia AND
                            id_turma = :turma)
                    AS frequencia_unidade";
        $aluno->frequencia_unidade = $this->executeStatement($sql, ['id_aluno' => $idaluno, 'periodo' => ID_PERIODO_LETIVO, 'unidade' => $unidade, 'materia' => $materia, 'turma' => $turma])->fetch()->frequencia_unidade;
        
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
                            id_turma = :turma) 
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
        $aluno->frequencia_total = $this->executeStatement($sql, ['id_aluno' => $idaluno, 'periodo' => ID_PERIODO_LETIVO, 'turma' => $turma, 'materia' => $materia])->fetch()->frequencia;

        $sql = "SELECT
                    valor_nota
                FROM
                    tb_nota
                WHERE
                    id_periodo_letivo = :periodo AND
                    id_materia = :materia AND
                    id_matricula = :id_aluno AND
                    unidade = :unidade
                ORDER BY
                    peso_nota";
        $smt = $this->executeStatement($sql, ['id_aluno' => $idaluno, 'periodo' => ID_PERIODO_LETIVO, 'materia' => $materia, 'unidade' => $unidade])->fetchAll();
        [$aluno->trabalho, $aluno->prova] = [$smt[0]->valor_nota, $smt[1]->valor_nota];
        return $aluno;
    }
}
