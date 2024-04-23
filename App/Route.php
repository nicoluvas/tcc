<?php

namespace App;
use Needs\Init\Bootstrap;

class Route extends Bootstrap {
    protected function Routes(){
        $routes['index'] = [
            'route' => '/index', // gambiarra pro leme arrumar hihihi
            'controller' => 'Index\\IndexController',
            'action' => 'index'
        ];

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

        $this->setRoutes($routes);
    }
}
