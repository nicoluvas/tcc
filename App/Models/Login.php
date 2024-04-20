<?php

namespace App\Models;
use Needs\Model\Model;

class Login extends Model {
    public function authLogin($usuario, $codigo_acesso){
        // virificar se o login é de aluno
        $sql = "
            SELECT 
                *
            FROM
                tb_aluno
            WHERE 
                nm_usuario = :usuario
            LIMIT 1
        ";
        $query = $this->db->prepare($sql);
        $query->bindParam(':usuario', $usuario);
        $query->execute();

        $result_aluno = $query->fetchAll();
        if(!empty($result_aluno) && password_verify($codigo_acesso, $result_aluno[0]->cd_codigo_acesso)){
            $this->saveUserInfo($result_aluno[0], 'aluno');
            header('Location: /aluno/home');
            die();
        }

        // virificar se o login é de professor
        $sql = "
            SELECT 
                *
            FROM
                tb_professor
            WHERE 
                nm_usuario = :usuario
            LIMIT 1
        ";
        $query = $this->db->prepare($sql);
        $query->bindParam(':usuario', $usuario);
        $query->execute();

        $result_professor = $query->fetchAll();
        if(!empty($result_professor) && password_verify($codigo_acesso, $result_professor[0]->cd_codigo_acesso)){
            $this->saveUserInfo($result_professor[0], 'professor');
            header('Location: /professor/home');
            die();
        }

        // virificar se o login é de admin
        $sql = "
            SELECT 
                *
            FROM
                tb_admin
            WHERE 
                nm_usuario = :usuario
            LIMIT 1
        ";
        $query = $this->db->prepare($sql);
        $query->bindParam(':usuario', $usuario);
        $query->execute();

        $result_admin = $query->fetchAll();
        if(!empty($result_admin) && password_verify($codigo_acesso, $result_admin[0]->cd_codigo_acesso)){
            $_SESSION['admin'] = true;
            header('Location: /admin/home');
            die();
        }

        // se nao nao achar nada
        $_SESSION['msg'] = 'ERRO! usuário ou senha inválido';
        header('Location: /login');
    }

    private function saveUserInfo($usuario, $tipo_usuario){
        $_SESSION[$tipo_usuario] = [
            'id' => $usuario->{"cd_".$tipo_usuario},
            'nome' => $usuario->{"nm_".$tipo_usuario},
            'foto_perfil' => $usuario->nm_foto_perfil,
            'atualizacao' => $usuario->dt_atualizacao
        ];
    }
}
