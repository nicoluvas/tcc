<?php

namespace Needs\Model;
use App\Connection;

abstract class Model {
    protected $db;

    public function __construct(){
        $db = Connection::connect();
        $this->db = $db;
    }

    protected function executeStatement($sql){
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}
