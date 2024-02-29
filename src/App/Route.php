<?php

namespace SVMLiver\App;

class Route
{
    private static array $routes = [];

    public static function get($path, $controller, $function): void
    {
        self::add("GET", $path, $controller, $function);
    }

    public static function post($path, $controller, $function): void
    {
        self::add("POST", $path, $controller, $function);
    }
    private static function add($method, $path, $controller, $function): void
    {
        self::$routes[] = [
            "method" => $method,
            "path" => $path,
            "controller" => $controller,
            "function" => $function
        ];
    }

    public static function Run(): void
    {
        $path = '/';

        if (isset($_SERVER['PATH_INFO'])) {
            $path = $_SERVER['PATH_INFO'];
        }

        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) {
            if ($path == $route['path'] && $method == $route['method']) {

                $controller = new $route['controller'];
                $function = $route['function'];

                $controller->$function();
                return;
            }
        }

        ErrorHandler::SetErrorView(404);
    }
}
