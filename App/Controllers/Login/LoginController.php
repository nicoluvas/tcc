<?php

namespace App\Controllers\Login;
use Needs\Controller\Action;
use Needs\Model\Container;

class LoginController extends Action {
    public function index(){
        return $this->render('login', 'login');
    }
}
