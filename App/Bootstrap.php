<?php

namespace App;
use Dotenv\Dotenv;

class Bootstrap extends Router{
    public function __construct(){
        $this->loadEnvironmentVariables();

        $this->declareRoutes();

        $uri = $this->getUri();
        $this->run($uri);
    }
    
    private function run($uri){
        foreach($this->routes as $router){
            if ($uri == $router['router']){
                if (!in_array($_SERVER['REQUEST_METHOD'], $router['method'])) {
                    http_response_code(405);
                    // require 'Erro405.php';
                    die();
                }
                $controllerClass = 'App\\Controllers\\' . $router['controller'];
                $action = $router['action'];

                $controllerInstance = new $controllerClass();
                $controllerInstance->$action();
                die();
            }
            
            $regex = str_replace("/", "\/", ltrim($router['router'], "/"));
            if (preg_match("/^$regex$/", ltrim($uri, "/"))) {
                if (!in_array($_SERVER['REQUEST_METHOD'], $router['method'])) {
                    http_response_code(405);
                    // require 'Erro405.php';
                    die();
                }
                $controllerClass = 'App\\Controllers\\' . $router['controller'];
                $action = $router['action'];
                
                $uri = explode('/', ltrim($uri, '/'));
                $data = array_values(array_diff($uri, explode('/', ltrim($router['router'], '/'))));
                $newData = [];
                foreach ($data as $i => $d){
                    $newData[$router['params'][$i]] = $d;
                }

                $controllerInstance = new $controllerClass();
                call_user_func_array([$controllerInstance, $action], $newData);
                die();
            }
        }
        http_response_code(404);
        // require 'Erro404.php';
        die();
    }
    
    private function getUri(){
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        if(str_ends_with($uri, '/') && $uri != '/') {
            $uri = rtrim($uri, '/');
            header("Location: $uri");
            die();
        }
        return $uri;
    }

    private function loadEnvironmentVariables(){
        $dotenv = Dotenv::createImmutable(dirname(__FILE__, 2));
        $dotenv->load();
    }
}