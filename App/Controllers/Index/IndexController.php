<?php

namespace App\Controllers\Index;
use Needs\Controller\Controller;

class IndexController extends Controller {
    public function index(){
        return $this->render('index', 'Index');
    }
}
