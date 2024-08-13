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

    private function LoginAuthAluno($codigo_acesso, $senha) {
        $sql = "SELECT
                        *
                   FROM
                        tb_aluno
                    WHERE
                        cd_aluno = :codigo_acesso
                ";

        $query = $this->executeStatement($sql, ['codigo_acesso' => $codigo_acesso]);
        if  ($query->rowCount() != 1) return False;

        $query->fetchAll()[0];
        if (!password_verify($senha, $query->senha_aluno)) return False;

        return [$query, 'aluno'];
    }

    private function LoginAuthDocente($email_docente, $senha) {
        $sql = "SELECT
                        *
                   FROM
                        tb_docente
                    WHERE
                        email_docente = :email_docente
                ";

        $query = $this->executeStatement($sql, ['email_docente' => $email_docente]);
        if  ($query->rowCount() != 1) return False;

        $query->fetchAll()[0];
        if (!password_verify($senha, $query->senha_docente)) return False;

        return [$query, 'docente'];
    }

    private function SaveUserInfo($user, $type) {
        $_SESSION['logged'] = [
            'tipo' => $type,
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
