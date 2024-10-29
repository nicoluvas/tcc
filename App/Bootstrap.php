<?php

namespace App;
use Dotenv\Dotenv;
use App\Tools\Tools;

class Bootstrap extends Router{
    public function __construct(){
        $this->loadEnvironmentVariables();

        $this->declareRoutes();
        define('ERRO404', dirname(__FILE__, 1).'/Erro404.php');
        define('ERRO405', dirname(__FILE__, 1).'/Erro405.php');

        $uri = $this->getUri();
        if (!str_contains($uri, '/p/')) {
            Tools::emPeriodoLetivo();
        }
        $this->run($uri);
    }
    
    private function run($uri){
        foreach($this->routes as $router){
            if ($uri == $router['router']){
                if (!in_array($_SERVER['REQUEST_METHOD'], $router['method'])) {
                    // http_response_code(405);
                    require ERRO405;
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
                    // http_response_code(405);
                    require ERRO405;
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
                if (array_key_exists('periodo', $newData)) {
                    Tools::emPeriodoLetivo($newData['periodo']);
                }
                call_user_func_array([$controllerInstance, $action], $newData);
                die();
            }
        }
        // http_response_code(404);
        require ERRO404;
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