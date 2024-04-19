<?php

namespace App\Models;
use Needs\Model\Model;

class Login extends Model {
    public function authLogin($usuario, $codigo_acesso){
        $sql = "
            SELECT 
                *
            FROM 
                tb_login
            WHERE
                nm_usuario = :usuario AND
                cd_codigo_acesso = :codigo_acesso
            LIMIT 1
        ";

        $query = $this->db->prepare($sql);
        $query->bindParam(':usuario', $usuario);
        $query->bindParam(':codigo_acesso', $codigo_acesso);
        $query->execute();
        
        $login_result = $query->fecthAll();

        if(empty($login_result) || !password_verify($codigo_acesso, $login_result->cd_codigo_acesso)){
            header('Location: /login');
            die();
        }

        $sql = "
            SELECT 
                *
            FROM
                tb_:tipo
            INNER JOIN
                tb_endereco ON cd_endereco = id_endereco
            INNER JOIN
                tb_sexo ON cd_sexo = id_sexo
            INNER JOIN
                tb_pcd ON cd_pcd = id_pcd
            INNER JOIN
                tb_tipo_sanguineo ON cd_tipo_sanguineo = id_tipo_sanguineo
            INNER JOIN
                tb_telefone ON cd_telefone = id_telefone
            WHERE
                id_login = :cd_login
            LIMIT 1
        ";

        $query = $this->db->prepare($sql);
        
        $query->bindParam(':tipo', $login_result->tb_login);
        $query->bindParam(':cd_login', $login_result->cd_login);
        $query->execute();

        $user_result = $query->fetchAll()[0];
        
        if(empty($user_result)){
            header('Location: /login');
            die();
        }
        
        $tipo_login = $login_result->tb_login;
        $_SESSION[$tipo_login] = [
            'name' => $user_result->{"nm_$tipo_login"},
            'rg' => $user_result->cd_rg,
            'cpf' => $user_result->cd_cpf,
            'email' => $user_result->nm_email,
            'foto_perfil' => $user_result->nm_foto_perfil,
            'tipo_sanguineo' => $user_result->nm_tipo_sanguineo,
            'sexo' => $user_result->nm_sexo,
            'pcd' => $user_result->nm_pcd,
            'telefone' => $user_result->nm_numero,
            'endereco' => [
                'uf' => $user_result->cd_uf,
                'cidade' => $user_result->nm_cidade,
                'bairro' => $user_result->nm_bairro,
                'rua' => $user_result->nm_rua,
                'complemento' => $user_result->nm_complemento
            ],
            'cadastro' => $user_result->dt_cadastro,
            'atualizacao' => $user_result->dt_atualizacao
        ];

        if(isset($_SESSION['professor'])) header('Location: /professor/home');
        if(isset($_SESSION['aluno'])) header('Location: /aluno/home');
        if(isset($_SESSION['admin'])) header('Location: /admin/home');
        die();
    }
}
