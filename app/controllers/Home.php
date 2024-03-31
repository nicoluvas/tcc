<?php

namespace app\controllers;

class Home {
    public function index(){
        return [
            'view' => 'home/home.view.php',
            'data' => ['name' => 'leme']
        ];
    }
}
