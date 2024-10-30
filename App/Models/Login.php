<?php

namespace App\Models;
use Core\Model\Model;
use App\Tools\Tools;

class Login extends Model {
    public function LoginAuth($codigo_acesso, $senha){
        try {
            if (filter_var($codigo_acesso, FILTER_VALIDATE_EMAIL)) {
                [$user, $type] = $this->LoginAuthDocente($codigo_acesso, $senha);
                $this->SaveUserInfo($user, $type);
                return True;
            }
            if ([$user, $type] = $this->LoginAuthAluno($codigo_acesso, $senha)) {
                $this->SaveUserInfo($user, $type);
                return True;
            }

            $_SESSION['msg'] = "ERRO: Usuário ou senha inválido";
            return False;
        } catch (\PDOException $e) {
            $_SESSION['msg'] = 'Erro interno do servidor, tente mais tarde';
            return False;
        }
    }

    private function LoginAuthAluno($rg, $senha) {
        $sql = "SELECT
                    cd_aluno as id,
                    nome_aluno as nome,
                    telefone_aluno as telefone,
                    cpf_aluno as cpf,
                    rg_aluno as rg,
                    nascimento_aluno as nascimento,
                    senha_aluno,
                    id_cargo
                FROM
                    tb_aluno";

        $query = $this->executeStatement($sql);
        if  ($query->rowCount() == 0) return False;

        $results = $query->fetchAll();
        foreach ($results as $result) {
            $rg_banco = Tools::decrypt($result->rg);
            if (password_verify($senha, $result->senha_aluno) && $rg_banco == $rg) {
                Tools::decryptRecursive($result);
                return [$result, 'aluno'];
            }
        }

        return False;
    }

    private function LoginAuthDocente($email_docente, $senha) {
        $sql = "SELECT
                    cd_docente as id,
                    nome_docente as nome,
                    telefone_docente as telefone,
                    cpf_docente as cpf,
                    rg_docente as rg,
                    email_docente as email,
                    senha_docente,
                    id_cargo
                FROM
                    tb_docente
                WHERE
                    st_docente LIKE 'A'
                ";

        $query = $this->executeStatement($sql);
        if  ($query->rowCount() == 0) return False;

        $results = $query->fetchAll();
        foreach ($results as $result) {
            $email_banco = Tools::decrypt($result->email);
            if (password_verify($senha, $result->senha_docente) && $email_banco == $email_docente) {
                Tools::decryptRecursive($result);
                return [$result, $result->id_cargo==2?'professor':'docente'];
            }
        }

        return False;
    }

    private function SaveUserInfo($user, $type) {
        $_SESSION['logged'] = [
            'tipo' => $type,
            'id' => $user->id,
            'cargo' => $user->id_cargo,
            'nome' => ucwords($user->nome),
            'telefone' => $user->telefone,
            'cpf' => $user->cpf,
            'rg' => $user->rg,
            'email' => $user->email??null,
            'nascimento' => $user->nascimento??null
        ];
    }
}
