<?php

namespace Needs\Controller;

abstract class Controller {
    protected $view;

    public function __construct(){
        $this->view = new \stdClass();
    }

    protected function render($view, $directory, $layout=''){
        $this->view->page = $view;
        $this->view->directory = $directory;

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
        $class = explode('\\', get_class($this));
        $control =  preg_split('/(?=[A-Z])/', $class[2]);
        $directory = $this->view->directory != '' ? $this->view->directory : ucfirst($control[1]);
    
        require_once '../App/Views/' . $directory . '/' . $this->view->page . '.php';
    }
}
