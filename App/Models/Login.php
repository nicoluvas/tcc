<?php

namespace App\Models;
use Core\Model\Model;

class Login extends Model {
    public function LoginAuth($codigo_acesso, $senha){
        try {
            if ([$user, $type] = $this->LoginAuthAluno($codigo_acesso, $senha)) {
                $this->SaveUserInfo($user, $type);
                return True;
            }
            if ([$user, $type] = $this->LoginAuthDocente($codigo_acesso, $senha)) {
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
                    email_aluno as email,
                    nascimento_aluno as nascimento,
                    senha_aluno,
                    id_cargo
                FROM
                    tb_aluno
                WHERE
                    rg_aluno = :rg
                ";

        $query = $this->executeStatement($sql, [':rg' => $rg]);
        if  ($query->rowCount() != 1) return False;

        $result = $query->fetchAll()[0];
        if (!password_verify($senha, $result->senha_aluno)) return False;

        return [$result, 'aluno'];
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
                    email_docente = :email_docente
                ";

        $query = $this->executeStatement($sql, ['email_docente' => $email_docente]);
        if  ($query->rowCount() != 1) return False;

        $result = $query->fetchAll()[0];
        if (!password_verify($senha, $result->senha_docente)) return False;

        return [$result, $result->id_cargo==2?'professor':'docente'];
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
            'email' => $user->email,
            'nascimento' => $user->nascimento??null
        ];
    }
}
