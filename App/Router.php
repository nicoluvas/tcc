<?php

namespace App;

abstract class Router {
    protected $routes = [];
    protected function declareRoutes(){

        // Página principal
        $routes['index'] = [
            'router' => '/',
            'controller' => 'Index\\IndexController',
            'action' => 'index',
            'method' => 'GET'
        ];

        // Página de login
        $routes['login'] = [
            'router' => '/login',
            'controller' => 'Login\\LoginController',
            'action' => 'index',
            'method' => 'GET'
        ];

        // Autentificar login
        $routes['loginAuth'] = [
            'router' => '/login/auth',
            'controller' => 'Login\\LoginController',
            'action' => 'auth',
            'method' => 'GET'
        ];

        // Páginas de administração
        $routes['AdminHome'] = [
            'router' => '/admin/home',
            'controller' => 'Admin\\AdminController',
            'action' => 'home',
            'method' => 'GET'
        ];

        $this->routes = $routes;
    }
}
