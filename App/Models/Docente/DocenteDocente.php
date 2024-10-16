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
                ORDER BY
                    id_cargo, nome_docente";
        return $this->executeStatement($sql)->fetchAll();
    }
}
