<?php

function searchExactURIInRoutes($uri, $routes){
    return array_key_exists($uri, $routes) ? [$uri => $routes[$uri]] : [];
}

function regularExpressionInRoutes($uri, $routes){
    return array_filter(
        $routes,
        function ($value) use ($uri){
            $regex = str_replace("/", "\/", ltrim($value, "/"));
            return preg_match("/^$regex$/", ltrim($uri, "/"));
        },
        ARRAY_FILTER_USE_KEY
    );
}

function getData($uri, $matchedURI){
    $matchedURI = explode('/', array_keys($matchedURI)[0]);
    return array_diff($uri, $matchedURI);
}

function formatData($uri, $data){
    $newData = [];
    foreach ($data as $i => $d){
        $newData[$uri[$i - 1]] = $d;
    }
    return $newData;
}

function router(){
    $routes = require 'routes.php';
    $uri = $_SERVER["REQUEST_URI"];
    
    $matchedURI = searchExactURIInRoutes($uri, $routes);
    $data = [];
    if(!$matchedURI){
        $matchedURI = regularExpressionInRoutes($uri, $routes);
    }
    
    if($matchedURI){
        $uri = explode('/', ltrim($uri, '/'));
        $data = getData($uri, $matchedURI);
        $data = formatData($uri, $data);

        return controller($matchedURI, $data);
    }

    throw new Exception("404 página não encontrada");
}
