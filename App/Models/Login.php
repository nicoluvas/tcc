<?php

namespace App\Models;
use Core\Model\Model;

class Login extends Model {
    public function LoginAuth($codigo_acesso, $senha){
        try {
            if ($this->LoginAuthAluno($codigo_acesso, $senha)) {

            }
            if ($this->LoginAuthFuncionario($codigo_acesso, $senha)) {

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
                        
                ";
    }

    private function LoginAuthFuncionario($codigo_acesso, $senha) {

    }

    private function SaveUserInfo($smt) {

    }
}
