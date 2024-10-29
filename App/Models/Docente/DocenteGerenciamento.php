<?php

namespace App\Models\Docente;
use Core\Model\Model;
use App\Models\Docente\DocenteAluno;
use App\Tools\Tools;

class DocenteGerenciamento extends Model {
    public function MediaNotas() {
        $sql = "SELECT
                    SUM(valor_nota * peso_nota)/SUM(peso_nota) as media_total
                FROM
                    tb_nota
                INNER JOIN
                    tb_matricula
                    ON
                        id_aluno = id_matricula
                WHERE
                    tb_nota.id_periodo_letivo = :periodo AND
                    st_matricula like 'A'";
        $media_total = $this->executeStatement($sql, ['periodo' => ID_PERIODO_LETIVO])->fetch()->media_total;
        
        for ($i=1;$i<=3;$i++) {
            $sql = "SELECT
                        SUM(valor_nota * peso_nota)/SUM(peso_nota) as media
                    FROM
                        tb_nota
                    INNER JOIN
                        tb_matricula
                        ON
                            id_aluno = id_matricula
                    WHERE
                        tb_nota.id_periodo_letivo = :periodo AND
                        st_matricula like 'A' AND
                        unidade like '$i'";
            $aux = 'media'.$i;
            $$aux = $this->executeStatement($sql, ['periodo' => ID_PERIODO_LETIVO])->fetch()->media;
        }

        return (object) ['media' => $media_total, 'unidade1' => $media1, 'unidade2' => $media2, 'unidade3' => $media3];
    }

    public function MediaFrequencia() {
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
                            tb_aula.id_periodo_letivo = :periodo AND
                            st_falta like 'A') 
                        /
                        ((SELECT
                            count(*)
                        FROM
                            tb_aluno
                        WHERE
                            st_aluno like 'A')*(SELECT 
                            count(*) 
                        FROM
                            tb_aula 
                        WHERE 
                            id_periodo_letivo = :periodo))
                    AS 
                        frequencia";
        $media_total = $this->executeStatement($sql, ['periodo' => ID_PERIODO_LETIVO])->fetch()->frequencia;
        
        for ($i=1;$i<=3;$i++) {
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
                            tb_aula.id_periodo_letivo = :periodo AND
                            st_falta like 'A' AND
                            tb_aula.unidade like '$i' AND 
                            tb_falta.unidade like '$i') 
                        /
                        ((SELECT
                            count(*)
                        FROM
                            tb_aluno
                        WHERE
                            st_aluno like 'A')*(SELECT 
                            count(*) 
                        FROM
                            tb_aula 
                        WHERE 
                            id_periodo_letivo = :periodo AND
                            tb_aula.unidade like '$i'))
                    AS 
                        frequencia";
            $aux = 'media'.$i;
            $$aux = $this->executeStatement($sql, ['periodo' => ID_PERIODO_LETIVO])->fetch()->frequencia;
        }

        return (object) ['media' => $media_total, 'unidade1' => $media1, 'unidade2' => $media2, 'unidade3' => $media3];
    }

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
                    tb_aula.id_periodo_letivo,
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
                    tb_aula.id_periodo_letivo = :periodo AND
                    st_falta = 'A'
                GROUP BY
                    id_matricula, id_aula
                ORDER BY
                    dt_aula DESC";
        $params = [
            'periodo' => ID_PERIODO_LETIVO
        ];
        $result = $this->executeStatement($sql, $params)->fetchAll();
        Tools::decryptRecursive($result);
        return $result;
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
                    inicio_ferias = :inicioferias
                WHERE
                    cd_periodo_letivo = :periodo";
        $params = [
            'inicio' => $inicio_periodo,
            'fim' => $fim_periodo,
            'inicioferias' => $inicio_ferias,
            'periodo' => ID_PERIODO_LETIVO
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

        $aprovados = [];
        $reprovados = [];
        foreach ($alunos as $aluno) {
            if ($this->PassouFrequencia($aluno) && $this->PassouNotas($aluno)) {
                $aprovados[] = $aluno->cd_aluno;
            } else {
                $reprovados[] = $aluno->cd_aluno;
            }
        }

        $this->AtualizarSituacao($alunos, $aprovados);
        $this->executeStatement('INSERT INTO tb_periodo_letivo VALUES (null, null, null, null)');
        $novo_periodo = $this->db->lastInsertId();
        $this->Rematriculas($alunos, $aprovados, $novo_periodo);
        return [sizeof($aprovados), sizeof($reprovados)];
    }

    private function PassouFrequencia($aluno) {
        $sql = "SELECT
                    1 - (SELECT
                            count(*)
                        FROM
                            tb_falta
                        WHERE
                            id_matricula = :id_aluno AND
                            id_periodo_letivo = :id_periodo)
                        /
                        (SELECT
                            count(*)
                        FROM
                            tb_aula
                        WHERE
                            id_turma = :id_turma AND
                            id_periodo_letivo = :id_periodo)
                AS frequencia";
        $frequencia = $this->executeStatement($sql, ['id_turma' => $aluno->id_turma, 'id_aluno' => $aluno->cd_aluno, 'id_periodo' => ID_PERIODO_LETIVO])->fetch()->frequencia;
    
        if ($frequencia >= 0.75) return true;
        return false;
    }

    private function PassouNotas($aluno) {
        $materias = $this->executeStatement('SELECT * FROM tb_turma_materia WHERE id_turma = :turma', ['turma' => $aluno->id_turma])->fetchAll();

        foreach ($materias as $materia) {
            for ($i=1;$i<=3;$i++) {
                $sql = "SELECT
                            SUM(valor_nota * peso_nota) / SUM(peso_nota) as media_unidade
                        FROM
                            tb_nota
                        WHERE
                            id_matricula = :matricula AND
                            id_periodo_letivo = :periodo AND
                            id_materia = :materia AND
                            unidade = '$i'";
                $aux = 'media'.$i;
                $$aux = $this->executeStatement($sql, ['matricula' => $aluno->cd_aluno, 'periodo' => ID_PERIODO_LETIVO, 'materia' => $materia->id_materia])->fetch()->media_unidade;
            }
            if (($media1 + $media2 + $media3)/3 < 6) {
                return false;
            }
        }
        return true;
    }

    private function AtualizarSituacao($alunos, $aprovados) {
        foreach ($alunos as $aluno) {
            $situacao = in_array($aluno->cd_aluno, $aprovados)?'F':'R';
            $sql = "UPDATE
                        tb_matricula
                    SET
                        st_matricula = '$situacao'
                    WHERE
                        id_aluno = :aluno AND
                        id_periodo_letivo = :periodo";
            $this->executeStatement($sql, ['aluno' => $aluno->cd_aluno, 'periodo' => ID_PERIODO_LETIVO]);
        }
    }

    private function Rematriculas($alunos, $aprovados, $novo_periodo) {
        foreach ($alunos as $aluno) {
            if (in_array($aluno->cd_aluno, $aprovados) && in_array($aluno->id_turma, [13, 14])) {
                $sql = "UPDATE 
                            tb_aluno
                        SET
                            st_aluno = 'F'
                        WHERE
                            cd_aluno = :aluno";
                $this->executeStatement($sql, ['aluno' => $aluno->cd_aluno]);
                continue;
            }
            $sql = "INSERT INTO
                        tb_matricula
                    VALUES
                        (:aluno, :periodo, default)";
            $this->executeStatement($sql, ['aluno' => $aluno->cd_aluno, 'periodo' => $novo_periodo]);
            
            $sql = "INSERT INTO
                        tb_matricula_turma
                    VALUES
                        (:aluno, :periodo, :turma)";
            $this->executeStatement($sql, ['aluno' => $aluno->cd_aluno, 'periodo' => $novo_periodo, 'turma' => in_array($aluno->cd_aluno, $aprovados)?$aluno->id_turma+2:$aluno->id_turma]);
        }
    }
}
