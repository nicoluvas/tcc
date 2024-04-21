<?php

namespace App\Controllers\Admin;
use Needs\Controller\Controller;

class AdminController extends Controller {
    public function index(){
        $this->page_title  = 'Admin Home';
        $this->render('AdminHome', 'Admin', 'AdminLayout');
    }
}
