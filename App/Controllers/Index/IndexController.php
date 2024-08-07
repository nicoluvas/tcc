<?php

namespace App\Controllers\Index;
use Core\Controller\Controller;

class IndexController extends Controller {
    public function index(){
        return $this->renderView('index', 'Index');
    }
}
