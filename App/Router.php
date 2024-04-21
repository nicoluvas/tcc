<?php

namespace App;

abstract class Router {
    protected function declareRoutes(){

        // Página principal
        $routes['index'] = [
            'route' => '/',
            'controller' => 'Index\\IndexController',
            'method' => 'index'
        ];

        // Página de login
        $routes['login'] = [
            'route' => '/login',
            'controller' => 'Login\\LoginController',
            'method' => 'index'
        ];

        // Autentificar login
        $routes['loginAuth'] = [
            'route' => '/login/auth',
            'controller' => 'Login\\LoginController',
            'method' => 'auth'
        ];

        // Páginas de administração
        $routes['AdminHome'] = [
            'route' => '/admin/home',
            'controller' => 'Admin\\AdminController',
            'method' => 'home'
        ];

        $this->routes = $routes;
    }
}
