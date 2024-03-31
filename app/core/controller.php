<?php

function controller($matchedURI, $data){
    [$controller, $method] = explode('@', array_values($matchedURI)[0]);

    $controllerNameSpace = CONTROLLER_PATH . $controller;
    if(!class_exists($controllerNameSpace)){
        throw new Exception("Controller {$controller} não existe");
    }

    if(!method_exists($controllerNameSpace, $method)){
        throw new Exception("Método {$method} do controller {$controller} não existe");
    }

    $controllerInstance = new $controllerNameSpace();
    return $controllerInstance->$method($data??null);
}
