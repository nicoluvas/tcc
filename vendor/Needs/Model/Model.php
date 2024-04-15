<?php

namespace Needs\Model;

abstract class Model {
    private $db;

    public function __contruct($db){
        $this->db = $db;
    }

    protected function executeStatement($sql){
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}
