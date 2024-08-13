<?php

namespace App;

abstract class Router {
    protected $routes = [];
    protected function declareRoutes(){

        // Página principal
        $routes['index'] = [
            'router' => '/',
            'controller' => 'Index\\IndexController',
            'action' => 'Index',
            'method' => 'GET'
        ];

        // Página de login
        $routes['login'] = [
            'router' => '/login',
            'controller' => 'Index\\IndexController',
            'action' => 'LoginPage',
            'method' => 'GET'
        ];

        // Autentificar login
        $routes['loginAuth'] = [
            'router' => '/login/auth',
            'controller' => 'Index\\IndexController',
            'action' => 'LoginAuth',
            'method' => 'POST'
        ];

        $routes['logout'] = [
            'router' => '/login/auth',
            'controller' => 'Index\\IndexController',
            'action' => 'Logout',
            'method' => 'POST'
        ];

        $this->AdminRoutes();
        
        $this->routes = array_merge($this->routes, $routes);
    }

    private function AdminRoutes() {
        // Páginas de administração
        $routes['AdminHome'] = [
            'router' => '/admin/home',
            'controller' => 'Admin\\AdminController',
            'action' => 'Dashboard',
            'method' => 'GET'
        ];

        $this->routes = array_merge($this->routes, $routes);
    }
}
