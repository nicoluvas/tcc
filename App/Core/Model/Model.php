<?php

namespace Core\Model;
use App\Connection;
use App\Tools\Tools;

abstract class Model {
    protected $db;

    public function __construct(){
        $this->db = Connection::connect();
    }

    protected function executeStatement($sql, $params=[]){
        $query = $this->db->prepare($sql);

        if (!empty($params) && (str_starts_with($sql, 'INSERT') || str_starts_with($sql, 'UPDATE'))) {
            foreach ($params as $key => $value) {
                $v = ['nome', 'telefone', 'cpf', 'rg', 'email', 'nascimento', 'uf', 'cidade', 'bairro', 'logradouro', 'numero', 'complemento', 'cep'];
                if (!Tools::startsWithAny($key, $v)) continue;
                $params[$key] = Tools::encrypt($value);
            }
        }

        $query->execute($params);
        return $query;
    }
}
