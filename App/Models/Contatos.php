<?php

namespace App\Models;
use Core\Model\Model;

class Contatos extends Model {
    public function SolicitarContato($nome, $telefone, $email) {
        $sql = "INSERT INTO
                    tb_contato
                SET
                    nome_contato = :nome,
                    telefone_contato = :telefone,
                    email_contato = :email";
        $this->executeStatement($sql, ['nome' => $nome, 'telefone' => $telefone, 'email' => $email]);   
    }

    public function GetSolicitacoes() {
        $sql = "SELECT
                    *
                FROM
                    tb_contato
                WHERE
                    st_contato LIKE 'A'";
        return $this->executeStatement($sql)->fetchAll();
    }

    public function FecharContato($cd) {
        $sql = "UPDATE
                    tb_contato
                SET
                    st_contato = 'F'
                WHERE
                    cd_contato = :cd";
        $this->executeStatement($sql, ['cd' => $cd]);
    }
}
