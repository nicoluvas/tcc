<?php

namespace App\Models\Docente;
use Core\Model\Model;
use App\Models\Docente\DocenteAluno;

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
                    nome_aluno,
                    cd_aluno,
                    nm_materia,
                    dt_aula,
                    id_periodo_letivo,
                    id_aula
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

    public function IniciarPeriodoLetivo() {
        $inicio_periodo = $_POST['inicio'];
        [$fim_periodo, $inicio_ferias] = $this->CalcularDatasPeriodo($inicio_periodo);
        $sql = "UPDATE
                    tb_periodo_letivo
                SET
                    inicio = :inicio,
                    fim = :fim,
                    inicio_ferias = :inicio_ferias";
        $params = [
            'inicio' => $inicio_ferias,
            'fim' => $fim_periodo,
            'inicio_ferias' => $inicio_ferias
        ];
        $this->executeStatement($sql, $params);
        $this->CadastrarNotas();
        echo json_encode(['ok' => true, 'msg' => "Período Iniciado!"]);
        die();
    }

    private function CalcularDatasPeriodo($inicio_periodo) {
        $previa_fim = date('w', strtotime($inicio_periodo. ' + 300 days'));
        $fim_periodo = ($previa_fim == 0 || $previa_fim == 6)?date('Y-m-d', strtotime($inicio_periodo. ' + 302 days')):date('Y-m-d', strtotime($inicio_periodo. ' + 300 days'));
        $inicio_ferias = date('Y-m-d', strtotime($inicio_periodo. ' + 150 days'));
        return [$fim_periodo, $inicio_ferias];
    }

    private function CadastrarNotas() {
        $sql = "SELECT
                    *
                FROM
                    tb_aluno
                INNER JOIN
                    tb_matricula_turma
                    ON
                        id_matricula = cd_aluno
                WHERE
                    st_aluno like 'A'";
        $alunos = $this->executeStatement($sql)->fetchAll();
        $sql = "SELECT
                    *
                FROM
                    tb_materia
                INNER JOIN
                    tb_turma_materia
                    ON
                        cd_materia = id_materia";
        $materias = $this->executeStatement($sql)->fetchAll();
        foreach ($alunos as $aluno) {
            foreach ($materias as $materia) {
                if ($materia->id_turma != $aluno->id_turma) continue;
                $sql = "INSERT INTO
                            tb_nota
                        VALUES
                            (null, 0, 1, default, :periodo, :matricula, :materia, 1),
                            (null, 0, 2, default, :periodo, :matricula, :materia, 1),
                            (null, 0, 1, default, :periodo, :matricula, :materia, 2),
                            (null, 0, 2, default, :periodo, :matricula, :materia, 2),
                            (null, 0, 1, default, :periodo, :matricula, :materia, 3),
                            (null, 0, 2, default, :periodo, :matricula, :materia, 3)";
                $params = [
                    'periodo' => ID_PERIODO_LETIVO,
                    'matricula' => $aluno->cd_aluno,
                    'materia' => $materia->cd_materia
                ];
                $this->executeStatement($sql, $params);
            }
        }
    }

    public function FinalizarPeriodoLetivo() {
        $DocenteAluno = new DocenteAluno();
        $alunos = $DocenteAluno->GetAlunosGeral();
    }
}
