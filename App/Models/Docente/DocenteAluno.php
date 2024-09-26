<?php

namespace App\Models\Docente;
use Core\Model\Model;
use App\Tools\Tools;

class DocenteAluno extends Model {
    public function CadastrarAluno() {
        try {
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
                        (null, :nome, :tel, :cpf, :rg)";
            $params = [
                'nome' => $_POST['nome_responsavel'],
                'tel' => $_POST['telefone_responsavel'],
                'cpf' => $_POST['cpf_responsavel'],
                'rg' => $_POST['rg_responsavel']
            ];
            $this->executeStatement($sql, $params);
            $id_responsavel = $this->db->lastInsertId();

            $senha_inicial = Tools::random_strings(8);
            $sql = "INSERT INTO
                        tb_aluno
                    VALUES
                        (null, :nome, :tel, :cpf, :rg, :email, :nasc, :senha, default, :ende, 1, :resp, default)";
            $params = [
                'nome' => $_POST['nome'],
                'tel' => $_POST['telefone'],
                'cpf' => $_POST['cpf'],
                'rg' => $_POST['rg'],
                'email' => $_POST['email'],
                'nasc' => $_POST['nascimento'],
                'senha' => $senha_inicial,
                'ende' => $id_endereco,
                'resp' => $id_responsavel
            ];
            $this->executeStatement($sql, $params);
            $this->db->commit();
            echo json_encode(['ok' => true]);
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
                WHERE
                    cd_aluno = :id";
        $aluno = $this->executeStatement($sql, [':id' => $idaluno]);
        return $aluno->fetch();
    }
    
    public function GetAlunosGeral() {
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
                        cd_endereco = id_endereco";
        $aluno = $this->executeStatement($sql);
        return $aluno->fetchAll();
    }

    public function AtualizarAluno($idaluno) {
        try {
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
                        telefone_responsavel = :tel,
                        cpf_responsavel = :cpf,
                        rg_responsavel = :rg
                    WHERE
                        cd_responsavel = :resp";
            $params = [
                'nome' => $_POST['nome_responsavel'],
                'tel' => $_POST['telefone_responsavel'],
                'cpf' => $_POST['cpf_responsavel'],
                'rg' => $_POST['rg_responsavel'],
                'resp' => $id_responsavel
            ];
            $this->executeStatement($sql, $params);

            $sql = "UPDATE
                        tb_aluno
                    SET
                        nome_aluno = :nome,
                        telefone_aluno = :tel,
                        cpf_aluno = :cpf,
                        rg_aluno = :rg,
                        email_aluno = :email,
                        nascimento_aluno = :nasc
                    WHERE
                        cd_aluno = :aluno";
            $params = [
                'nome' => $_POST['nome'],
                'tel' => $_POST['telefone'],
                'cpf' => $_POST['cpf'],
                'rg' => $_POST['rg'],
                'email' => $_POST['email'],
                'nasc' => $_POST['nascimento'],
                'aluno' => $idaluno
            ];
            $this->executeStatement($sql, $params);
            $this->db->commit();
            echo json_encode(['ok' => true]);
        } catch (\Throwable $th) {
            $this->db->rollBack();
            echo json_encode(['ok' => false, 'msg' => 'Verifique as informações inseridas'. $th->getMessage()]);
        }
    }
}
