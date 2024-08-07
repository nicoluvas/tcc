<?php

namespace App\Controllers\Admin;
use Core\Controller\Controller;

class AdminController extends Controller {
    public function __construct(){
        if(!isset($_SESSION['admin'])){
            header('Location: /login');
            die();
        }
    }

    public function home(){
        $this->pageTitle  = 'Admin Home';
        $this->render('AdminHome', 'Admin', 'AdminLayout');
    }
}
