<?php

namespace app\controllers;

class User {
    public function login(){
        return [
            "view" => "login/login.view.php"
        ];
    }
}
