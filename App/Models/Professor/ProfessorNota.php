<?php

namespace App\Models\Professor;
use Core\Model\Model;

class ProfessorNota extends Model {
    public function NotasAluno($aluno, $materia) {
        $aluno_info = $this->executeStatement('SELECT * FROM tb_aluno WHERE cd_aluno = ?', [$aluno])->fetch();
        $materia_info = $this->executeStatement('SELECT * FROM tb_materia WHERE cd_materia = ?', [$materia])->fetch();
        
        $sql = "SELECT
                    *
                FROM
                    tb_nota
                WHERE
                    id_matricula = :id_matricula AND
                    id_materia = :id_materia AND
                    unidade = :unidade
                ORDER BY
                    peso_nota DESC";
        $params = [
            'id_matricula' => $aluno,
            'id_materia' => $materia,
            'unidade' => UNIDADE
        ];
        $result = $this->executeStatement($sql, $params)->fetchAll();
        $notas = ['prova' => 0, 'trabalho' => 0, 'aluno' => $aluno_info->nome_aluno, 'materia' => $materia_info->nm_materia];
        if (sizeof($result) == 2) {
            $notas['prova'] = $result[0]->valor_nota;
        } else if (sizeof($result) == 1) {
            if ($result[0]->peso_nota == 1) {
                $notas['trabalho'] = $result[0]->valor_nota;
            } else {
                $notas['prova'] = $result[0]->valor_nota;
            }
        }
        return $notas;
    }
}
