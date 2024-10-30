<?php

namespace App\Models\Professor;
use Core\Model\Model;
use App\Tools\Tools;

class ProfessorNota extends Model {
    public function NotasAluno($aluno, $materia) {
        $aluno_info = $this->executeStatement('SELECT * FROM tb_aluno WHERE cd_aluno = ?', [$aluno])->fetch();
        Tools::decryptRecursive($aluno_info);
        $materia_info = $this->executeStatement('SELECT * FROM tb_materia WHERE cd_materia = ?', [$materia])->fetch();
        
        $sql = "SELECT
                    *
                FROM
                    tb_nota
                WHERE
                    id_matricula = :id_matricula AND
                    id_materia = :id_materia AND
                    unidade = :unidade AND
                    id_periodo_letivo = :periodo
                ORDER BY
                    peso_nota DESC";
        $params = [
            'id_matricula' => $aluno,
            'id_materia' => $materia,
            'unidade' => UNIDADE,
            'periodo' => ID_PERIODO_LETIVO
        ];
        $result = $this->executeStatement($sql, $params)->fetchAll();
        $notas = ['prova' => $result[0]->valor_nota, 'trabalho' => $result[1]->valor_nota, 'aluno' => $aluno_info->nome_aluno, 'materia' => $materia_info->nm_materia];

        return $notas;
    }

    public function SalvarNotas() {
        $sql = "UPDATE
                    tb_nota
                SET
                    valor_nota = :prova
                WHERE
                    id_matricula = :id_matricula AND
                    id_materia = :id_materia AND
                    unidade = :unidade AND
                    peso_nota = 2 AND
                    id_periodo_letivo = :periodo";
        $params = [
            'prova' => $_POST['prova'],
            'id_matricula' => $_POST['aluno'],
            'id_materia' => $_POST['materia'],
            'unidade' => UNIDADE,
            'periodo' => ID_PERIODO_LETIVO
        ];
        $this->executeStatement($sql, $params);
        $sql = "UPDATE
                    tb_nota
                SET
                    valor_nota = :trabalho
                WHERE
                    id_matricula = :id_matricula AND
                    id_materia = :id_materia AND
                    unidade = :unidade AND
                    peso_nota = 1 AND
                    id_periodo_letivo = :periodo";
        $params = [
            'trabalho' => $_POST['trabalho'],
            'id_matricula' => $_POST['aluno'],
            'id_materia' => $_POST['materia'],
            'unidade' => UNIDADE,
            'periodo' => ID_PERIODO_LETIVO
        ];
        $this->executeStatement($sql, $params);
        echo json_encode(['ok' => true, 'msg' => 'Salvo com sucesso']);
    }
}
