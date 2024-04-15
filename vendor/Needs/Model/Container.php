<?php

namespace Needs\Model;
use App\Connection;

abstract class Container {
    public function getModel($model){
        $class = '\\App\\Models\\' . $model;
        
        $conn = Connection::connect();

        return new $class($conn);
    }
}
