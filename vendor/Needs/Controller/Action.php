<?php

namespace Needs\Controller;

abstract class Action {
    protected $view;

    public function __construct(){
        $this->view = new \stdClass();
    }

    protected function render($view, $directory){
        $this->view->page = $view;
        $this->view->directory = $directory;

        $class = explode('\\', get_class($this));
        $control =  preg_split('/(?=[A-Z])/', $class[2]);
        $directory = $this->view->directory != '' ? $this->view->directory : lcfirst($control[1]);

        require_once '../App/Views/' . $directory . '/' . $this->view->page . '.php';
    }
}
