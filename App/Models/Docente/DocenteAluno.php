<?php

namespace App\Models\Docente;
use Core\Model\Model;
use App\Tools\Tools;

class DocenteAluno extends Model {
    public function CadastrarAluno() {
        try {
            $results = $this->executeStatement('SELECT cpf_aluno from tb_aluno')->fetchAll();
            Tools::decryptRecursive($results);
            foreach ($results as $result) {
                if ($result->cpf_aluno == $_POST['cpf']) {
                    echo json_encode(['ok' => false, 'msg' => 'CPF já cadastrado']);
                    die();
                }
            }
            $this->db->beginTransaction();
            $sql = "INSERT INTO
                        tb_endereco
                    VALUES
                        (null, :uf, :cidade, :bairro, :logradouro, :numero, :complemento, :cep)";
            $params = [
                'uf' => $_POST['uf'],
                'cidade' => $_POST['localidade'],
                'bairro' => $_POST['bairro'],
                'logradouro' => $_POST['logradouro'],
                'numero' => $_POST['numero'],
                'complemento' => $_POST['complemento'],
                'cep' => $_POST['cep']
            ];
            $this->executeStatement($sql, $params);
            $id_endereco = $this->db->lastInsertId();

            $sql = "INSERT INTO
                        tb_responsavel
                    VALUES
                        (null, :nome, :telefone, :cpf, :email)";
            $params = [
                'nome' => $_POST['nome_responsavel'],
                'telefone' => $_POST['telefone_responsavel'],
                'cpf' => $_POST['cpf_responsavel'],
                'email' => $_POST['email_responsavel']
            ];
            $this->executeStatement($sql, $params);
            $id_responsavel = $this->db->lastInsertId();

            $senha_inicial = Tools::random_strings(8);
            $sql = "INSERT INTO
                        tb_aluno
                    VALUES
                        (null, :nome, :telefone, :cpf, :rg, :nascimento, :senha, default, :ende, 1, :resp, default)";
            $params = [
                'nome' => $_POST['nome'],
                'telefone' => $_POST['telefone'],
                'cpf' => $_POST['cpf'],
                'rg' => $_POST['rg'],
                'nascimento' => $_POST['nascimento'],
                'senha' => password_hash($senha_inicial, PASSWORD_BCRYPT),
                'ende' => $id_endereco,
                'resp' => $id_responsavel
            ];
            $this->executeStatement($sql, $params);
            $id_aluno = $this->db->lastInsertId();
            $sql = "INSERT INTO tb_matricula VALUES (:aluno, :periodo, default)";
            $params = [
                'aluno' => $id_aluno,
                'periodo' => ID_PERIODO_LETIVO
            ];
            $this->executeStatement($sql, $params);
            $turma = $this->executeStatement('SELECT id_turma, count(*) from tb_matricula_turma inner join tb_turma on id_turma = cd_turma inner join tb_matricula on id_matricula = id_aluno where nm_turma like :t and st_matricula like "A" group by tb_matricula.id_periodo_letivo, id_turma order by count(*)', ['t' => $_POST['turma'] . '%'])->fetch()->id_turma??$this->executeStatement('select cd_turma from tb_turma where nm_turma like :t', ['t' => $_POST['turma'] . '%'])->fetch()->cd_turma; // turma com menor numero de alunos com matriculas ativas

            $sql = "INSERT INTO tb_matricula_turma VALUES (:aluno, :periodo, :turma)";
            $params = [
                'aluno' => $id_aluno,
                'periodo' => ID_PERIODO_LETIVO,
                'turma' => $turma
            ];
            $this->executeStatement($sql, $params);

            $this->db->commit();
            echo json_encode(['ok' => true, 'senha' => $senha_inicial]);
        } catch (\Throwable $th) {
            $this->db->rollBack();
            echo json_encode(['ok' => false, 'msg' => 'Verifique as informações inseridas']);
        }
    }

    public function GetAluno($idaluno) {
        $sql = "SELECT
                    *
                FROM
                    tb_aluno
                INNER JOIN
                    tb_responsavel
                    ON
                        cd_responsavel = id_responsavel
                INNER JOIN
                    tb_endereco
                    ON 
                        cd_endereco = id_endereco
                INNER JOIN
                    tb_matricula
                    ON
                        cd_aluno = id_aluno
                INNER JOIN
                    tb_matricula_turma
                    ON
                        id_aluno = id_matricula
                INNER JOIN
                    tb_turma
                    ON
                        id_turma = cd_turma
                WHERE
                    cd_aluno = :id AND
                    tb_matricula.id_periodo_letivo = :periodo AND
                    st_matricula = 'A'";
        $aluno = $this->executeStatement($sql, ['id' => $idaluno, 'periodo' => ID_PERIODO_LETIVO])->fetch();
        Tools::decryptRecursive($aluno);
        return $aluno;
    }
    
    public function GetAlunosGeral() {
        $sql = "SELECT 
                    *
                FROM
                    tb_aluno
                INNER JOIN
                    tb_matricula
                    ON
                        cd_aluno = id_aluno
                INNER JOIN
                    tb_matricula_turma
                    ON
                        id_aluno = id_matricula
                INNER JOIN
                    tb_turma
                    ON
                        id_turma = cd_turma
                WHERE
                    tb_matricula.id_periodo_letivo = :periodo AND
                    tb_matricula_turma.id_periodo_letivo = :periodo AND
                    st_matricula = 'A'
                ORDER BY
                    id_turma, nome_aluno";
        $aluno = $this->executeStatement($sql, ['periodo' => ID_PERIODO_LETIVO])->fetchAll();
        Tools::decryptRecursive($aluno);
        return $aluno;
    }

    public function GetAlunosTurma($turma) {
        $sql = "SELECT 
                    *
                FROM
                    tb_aluno
                INNER JOIN
                    tb_matricula
                    ON
                        cd_aluno = id_aluno
                INNER JOIN
                    tb_matricula_turma
                    ON
                        id_aluno = id_matricula
                INNER JOIN
                    tb_turma
                    ON
                        id_turma = cd_turma
                WHERE
                    tb_matricula.id_periodo_letivo = :periodo AND
                    tb_matricula_turma.id_periodo_letivo = :periodo AND
                    cd_turma = :turma AND
                    st_matricula = 'A'
                ORDER BY
                    nome_aluno";
        $aluno = $this->executeStatement($sql, ['periodo' => ID_PERIODO_LETIVO, 'turma' => $turma])->fetchAll();
        Tools::decryptRecursive($aluno);
        return $aluno;
    }

    public function AtualizarAluno($idaluno) {
        try {
            if (Tools::decrypt($this->executeStatement('SELECT cpf_aluno from tb_aluno where cd_aluno = :aluno', ['aluno' => $idaluno])->fetch()->cpf_aluno) != $_POST['cpf']) {
                $results = $this->executeStatement('SELECT cpf_aluno from tb_aluno WHERE cd_aluno = :aluno', ['aluno' => $idaluno])->fetchAll();
                Tools::decryptRecursive($results);
                foreach ($results as $result) {
                    if ($result->cpf_aluno == $_POST['cpf']) {
                        echo json_encode(['ok' => false, 'msg' => 'CPF já cadastrado']);
                        die();
                    }
                }
            }
            $this->db->beginTransaction();
            $smt = $this->executeStatement('SELECT id_endereco, id_responsavel FROM tb_aluno WHERE cd_aluno = :aluno', ['aluno' => $idaluno])->fetch();
            $id_endereco = $smt->id_endereco;
            $id_responsavel = $smt->id_responsavel;

            $sql = "UPDATE
                        tb_endereco
                    SET
                        uf = :uf, 
                        cidade = :cidade,
                        bairro = :bairro,
                        logradouro = :logradouro,
                        numero = :numero,
                        complemento = :complemento,
                        cep = :cep
                    WHERE
                        cd_endereco = :ende";
            $params = [
                'uf' => $_POST['uf'],
                'cidade' => $_POST['localidade'],
                'bairro' => $_POST['bairro'],
                'logradouro' => $_POST['logradouro'],
                'numero' => $_POST['numero'],
                'complemento' => $_POST['complemento'],
                'cep' => $_POST['cep'],
                'ende' => $id_endereco
            ];
            $this->executeStatement($sql, $params);

            $sql = "UPDATE
                        tb_responsavel
                    SET
                        nome_responsavel = :nome,
                        telefone_responsavel = :telefone,
                        cpf_responsavel = :cpf,
                        email_responsavel = :email
                    WHERE
                        cd_responsavel = :resp";
            $params = [
                'nome' => $_POST['nome_responsavel'],
                'telefone' => $_POST['telefone_responsavel'],
                'cpf' => $_POST['cpf_responsavel'],
                'email' => $_POST['email_responsavel'],
                'resp' => $id_responsavel
            ];
            $this->executeStatement($sql, $params);

            $sql = "UPDATE
                        tb_aluno
                    SET
                        nome_aluno = :nome,
                        telefone_aluno = :telefone,
                        cpf_aluno = :cpf,
                        rg_aluno = :rg,
                        nascimento_aluno = :nascimento
                    WHERE
                        cd_aluno = :aluno";
            $params = [
                'nome' => $_POST['nome'],
                'telefone' => $_POST['telefone'],
                'cpf' => $_POST['cpf'],
                'rg' => $_POST['rg'],
                'nascimento' => $_POST['nascimento'],
                'aluno' => $idaluno
            ];
            $this->executeStatement($sql, $params);
            
            $sql = "UPDATE
                        tb_matricula_turma
                    SET
                        id_turma = :turma
                    WHERE
                        id_matricula = :aluno AND
                        id_periodo_letivo = :periodo";
            $params = [
                'turma' => $_POST['turma'],
                'aluno' => $idaluno,
                'periodo' => ID_PERIODO_LETIVO
            ];

            if ($this->executeStatement($sql, $params)->rowCount() > 0) {
                $sql = "UPDATE
                            tb_falta
                        SET
                            id_turma = :turma
                        WHERE
                            id_matricula = :matricula AND
                            id_periodo_letivo = :periodo";
                $this->executeStatement($sql, ['turma' => $_POST['turma'], 'matricula' => $idaluno, 'periodo' => ID_PERIODO_LETIVO]);
            }
            $this->db->commit();
            echo json_encode(['ok' => true]);
        } catch (\Throwable $th) {
            $this->db->rollBack();
            echo json_encode(['ok' => false, 'msg' => 'Verifique as informações inseridas']);
        }
    }

    public function CancelarMatricula($aluno) {
        try {
            $this->db->beginTransaction();

            $sql = "UPDATE
                        tb_matricula
                    SET
                        st_matricula = 'C'
                    WHERE
                        id_aluno = :cd_aluno";
            $pamas = [
                'cd_aluno' => $aluno
            ];
            $this->executeStatement($sql, $pamas);
            
            $sql = "UPDATE
                        tb_aluno
                    SET
                        st_aluno = 'C'
                    WHERE
                        cd_aluno = :cd_aluno";
            $pamas = [
                'cd_aluno' => $aluno
            ];
            $this->executeStatement($sql, $pamas);

            echo json_encode(['ok' => true]);
            $this->db->commit();
        } catch (\PDOException $th) {
            echo json_encode(['ok' => false]);
        }
    }

    public function AlterarSenha($cd) {
        $sql = "UPDATE
                    tb_aluno
                SET
                    senha_aluno = :senha
                WHERE
                    cd_aluno = :cd";
        $senha = Tools::random_strings(8);
        $this->executeStatement($sql, ['senha' => password_hash($senha, PASSWORD_BCRYPT), 'cd' => $cd]);
        return $senha;
    }
}
