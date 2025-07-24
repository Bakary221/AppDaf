<?php

namespace App\core;

class Router
{
    public static function resolveRoute(array $routes): void{
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    foreach ($routes as $route => $params) {

        $pattern = preg_replace('/\{cin\}/', '([^/]+)', $route);
        $pattern = "#^" . $pattern . "$#";
        
        if (preg_match($pattern, $uri, $matches)) {
            array_shift($matches);
            $controllerName = $params['controller'];
            $methodName = $params['method'];
            $controller = new $controllerName();
            
            $controller->$methodName(...$matches);
            return;
        }
    }
    echo "404";
    }
}