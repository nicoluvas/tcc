<?php

namespace Needs\Controller;

abstract class Controller {
    protected $view;

    protected function render($view, $directory, $layout=''){
        $this->page = $view;
        $this->directory = $directory;

        if (!empty($layout)){
            if(file_exists('../App/Layouts/' . $layout . '.php')){
                require '../App/Layouts/' . $layout . '.php';
                die();
            }
            var_dump("Layout '$layout' Inexistente");
            die();
        }

        $this->loadView();
    }
    
    protected function loadView(){  
        require_once '../App/Views/' . $this->directory . '/' . $this->page . '.php';
    }
}
