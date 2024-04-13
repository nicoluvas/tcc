<?php

namespace App\Controllers\Index;
use Needs\Controller\Action;

class IndexController extends Action {
    public function index(){
        return $this->render('index', 'Index');
    }
}
