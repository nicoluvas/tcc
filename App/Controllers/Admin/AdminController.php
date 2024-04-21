<?php

namespace App\Controllers\Admin;
use Needs\Controller\Controller;

class AdminController extends Controller {
    public function __construct(){
        if(!isset($_SESSION['admin'])){
            header('Location: /login');
            die();
        }
    }

    public function home(){
        $this->page_title  = 'Admin Home';
        $this->render('AdminHome', 'Admin', 'AdminLayout');
    }
}
