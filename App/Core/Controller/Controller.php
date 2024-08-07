<?php

namespace Core\Controller;

abstract class Controller {
    protected $page;
    protected $pageTitle;
    
    protected function render($view, $layout, $viewDirectory='', $layoutDirectory='') {
        $this->page = new \stdClass();
        $this->page->view = $view;
        $this->page->viewDirectory = $viewDirectory;

        if (file_exists('../App/Layouts/' . $layoutDirectory . '/' . $layout . '.php')){
            require '../App/Layouts/' . $layoutDirectory . '/' . $layout . '.php';
        } else {
            echo "Layout $layout inexistente";
        }
    }

    protected function renderLayout($layout, $directory=''){        
        if (file_exists('../App/Layouts/' . $directory . '/' . $layout . '.php')){
            require '../App/Layouts/' . $directory . '/' . $layout . '.php';
        } else {
            echo "Layout $layout inexistente";
        }
    }
    
    protected function renderView($view, $directory=''){
        if (file_exists('../App/Views/' . $directory . '/' . $view . '.php')){
            require '../App/Views/' . $directory . '/' . $view . '.php';
        } else {
            echo "View $view inexistente";
        }
    }
}