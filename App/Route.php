<?php

namespace App;
use Needs\Init\Bootstrap;

class Route extends Bootstrap {
    protected function Routes(){

        // Página principal
        $routes['index'] = [
            'route' => '/',
            'controller' => 'Index\\IndexController',
            'action' => 'index'
        ];

        // Páginas de login
        $routes['login'] = [
            'route' => '/login',
            'controller' => 'Login\\LoginController',
            'action' => 'index'
        ];

        $routes['loginAuth'] = [
            'route' => '/login/auth',
            'controller' => 'Login\\LoginController',
            'action' => 'auth'
        ];

        // Páginas de administração
        $routes['AdminHome'] = [
            'route' => '/admin/home',
            'controller' => 'Admin\\AdminController',
            'action' => 'index'
        ];

        $this->setRoutes($routes);
    }
}
