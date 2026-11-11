<?php

namespace core;

class Router {

    private array $routes = [];

    public function get(string $uri, array $action): void {
        $this->routes['GET'][$uri] = $action;
    }

    public function post(string $uri, array $action): void {
        $this->routes['POST'][$uri] = $action;
    }

    public function dispatch(string $method, string $uri): void {
        $uri = parse_url($uri, PHP_URL_PATH);

        $action = $this->routes[$method][$uri] ?? null;

        if (!$action) {
            http_response_code(404);
            echo '404 - Page Not Found';
            return;
        }

        [$controller, $method] = $action;

        require_once __DIR__ . "/../app/Controllers/{$controller}.php";

        $instance = new $controller();

        $instance->$method();
    }

}