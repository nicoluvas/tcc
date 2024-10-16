<?php

namespace App\Models\Docente;
use Core\Model\Model;
use App\Tools\Tools;

class DocenteDocente extends Model {
    public function CadastrarDocente() {
        try {
            if ($this->executeStatement('SELECT nome_docente from tb_docente where cpf_docente = :cpf or email_docente = :email', ['cpf' => $_POST['cpf'], 'email' => $_POST['email']])->fetch()) {
                echo json_encode(['ok' => false, 'msg' => 'CPF ou email já cadastrado']);
                die();
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

            $senha_inicial = Tools::random_strings(8);
            $sql = "INSERT INTO
                        tb_docente
                    VALUES
                        (null, :nome, :tel, :cpf, :rg, :email, :senha, default, null, default, :ende, :cargo)";
            $params = [
                'nome' => $_POST['nome'],
                'tel' => $_POST['telefone'],
                'cpf' => $_POST['cpf'],
                'rg' => $_POST['rg'],
                'email' => $_POST['email'],
                'senha' => password_hash($senha_inicial, PASSWORD_BCRYPT),
                'ende' => $id_endereco,
                'cargo' => $_POST['cargo']
            ];
            $this->executeStatement($sql, $params);

            $this->db->commit();
            echo json_encode(['ok' => true, 'senha' => $senha_inicial]);
        } catch (\Throwable $th) {
            $this->db->rollBack();
            echo json_encode(['ok' => false, 'msg' => 'Verifique as informações inseridas']);
        }
    }

    public function ListarDocentes() {
        $sql = "SELECT 
                    *
                FROM
                    tb_docente
                WHERE
                    st_docente like 'A'
                ORDER BY
                    id_cargo, nome_docente";
        return $this->executeStatement($sql)->fetchAll();
    }

    public function GetDocente($iddocente) {
        $sql = "SELECT
                    *
                FROM
                    tb_docente
                INNER JOIN
                    tb_endereco
                    ON
                        cd_endereco = id_endereco
                WHERE
                    cd_docente = :docente";
        return $this->executeStatement($sql, ['docente' => $iddocente])->fetch();
    }

    public function AtualizarDocente($iddocente) {
        try {
            $smt = $this->executeStatement('SELECT * FROM tb_docente WHERE cd_docente = :docente', ['docente' => $iddocente])->fetch();
            $email = $smt->email_docente;
            $cpf = $smt->cpf_docente;
            if ($email != $_POST['email'] || $cpf != $_POST['cpf']) {
                if ($this->executeStatement('SELECT * FROM tb_docente WHERE cpf_docente = :cpf OR email_docente = :email', ['cpf' => $_POST['cpf'], 'email' => $_POST['email']])) {
                    echo json_encode(['ok' => false, 'msg' => 'CPF ou EMAIL já cadastrado']);
                    die();
                }
            }
            $this->db->beginTransaction();

            $smt = $this->executeStatement('SELECT id_endereco, id_cargo FROM tb_docente WHERE cd_docente = :docente', ['docente' => $iddocente])->fetch();
            $id_endereco = $smt->id_endereco;
            $id_cargo = $smt->id_cargo;
            $sql = "UPDATE
                        tb_docente
                    SET
                        nome_docente = :nome,
                        rg_docente = :rg,
                        telefone_docente = :telefone,
                        cpf_docente = :cpf,
                        email_docente = :email,
                        id_cargo = :cargo
                    WHERE
                        cd_docente = :docente";
            $params = [
                'docente' => $iddocente,
                'nome' => $_POST['nome'],
                'rg' => $_POST['rg'],
                'telefone' => $_POST['telefone'],
                'cpf' => $_POST['cpf'],
                'email' => $_POST['email'],
                'cargo' => $_POST['cargo']
            ];
            $this->executeStatement($sql, $params);

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

            if ($id_cargo == 2) {
                // TODO
                // retirar a relacao entre as materias
            }

            $this->db->commit();
            echo json_encode(['ok' => true]);
        } catch (\Throwable $th) {
            $this->db->rollBack();
            echo json_encode(['ok' => false, 'msg' => 'Verifique as informações inseridas']);
        }
    }

    public function DesligarDocente($iddocente) {
        $sql = "UPDATE
                    tb_docente
                SET
                    dt_saida = NOW(),
                    st_docente = 'I'
                WHERE
                    cd_docente = :docente";
        $this->executeStatement($sql, ['docente' => $iddocente]);
        echo json_encode(['ok' => true]);
    }
}
