<?php

namespace app\core;

class Router {

    protected array $routes = [];

    public Request $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function get(string $path, $callback) {
        // $_SERVER
        // http://localhost:8080/users?id=1
        // C:\projects\php-mvc\core\Router.php:12:
        // array (size=31)
        //  'DOCUMENT_ROOT' => string 'C:\projects\php-mvc' (length=19)
        //  'REMOTE_ADDR' => string '::1' (length=3)
        //  'REMOTE_PORT' => string '53633' (length=5)
        //  'SERVER_SOFTWARE' => string 'PHP/8.3.28 (Development Server)' (length=31)
        //  'SERVER_PROTOCOL' => string 'HTTP/1.1' (length=8)
        //  'SERVER_NAME' => string 'localhost' (length=9)
        //  'SERVER_PORT' => string '8080' (length=4)
        //  'REQUEST_URI' => string '/users?id=1' (length=11)
        //  'REQUEST_METHOD' => string 'GET' (length=3)
        //  'SCRIPT_NAME' => string '/index.php' (length=10)
        //  'SCRIPT_FILENAME' => string 'C:\projects\php-mvc\index.php' (length=29)
        //  'PATH_INFO' => string '/users' (length=6)
        //  'PHP_SELF' => string '/index.php/users' (length=16)
        //  'QUERY_STRING' => string 'id=1' (length=4)
        //  'HTTP_HOST' => string 'localhost:8080' (length=14)
        //  'HTTP_CONNECTION' => string 'keep-alive' (length=10)
        //  'HTTP_SEC_CH_UA' => string '"Not-A.Brand";v="99", "Google Chrome";v="157", "Chromium";v="157"' (length=65)
        //  'HTTP_SEC_CH_UA_MOBILE' => string '?0' (length=2)
        //  'HTTP_SEC_CH_UA_PLATFORM' => string '"Windows"' (length=9)
        //  'HTTP_UPGRADE_INSECURE_REQUESTS' => string '1' (length=1)
        //  'HTTP_USER_AGENT' => string 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36' (length=111)
        //  'HTTP_ACCEPT' => string 'text/html,application/xhtml+xml,application/xml;q=0.9,image/jxl,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7' (length=145)
        //  'HTTP_SEC_FETCH_SITE' => string 'none' (length=4)
        //  'HTTP_SEC_FETCH_MODE' => string 'navigate' (length=8)
        //  'HTTP_SEC_FETCH_USER' => string '?1' (length=2)
        //  'HTTP_SEC_FETCH_DEST' => string 'document' (length=8)
        //  'HTTP_ACCEPT_ENCODING' => string 'gzip, deflate, br, zstd' (length=23)
        //  'HTTP_ACCEPT_LANGUAGE' => string 'en-US,en;q=0.9' (length=14)
        //  'HTTP_COOKIE' => string 'PHPSESSID=q1d75sepirbd992708pn4eh0id; Phpstorm-c886c599=dea52683-8bfb-4715-8a19-d0bc6ae96b88; __next_hmr_refresh_hash__=d589b0433afb89fd1987057552e184b2633457081244afec; _dd_s=' (length=176)
        //  'REQUEST_TIME_FLOAT' => float 1794413190.457419
        //  'REQUEST_TIME' => int 1794413190

        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback) {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve() {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();

        // fail case
        // ( ! ) Warning: Undefined array key "/" in C:\projects\php-mvc\core\Router.php on line 63

        // success case
        // array (size=3)
        //  'callback' =>
        //    object(Closure)[4]
        //      virtual 'closure' '{closure}'
        //  'method' => string 'get' (length=3)
        //  'path' => string '/users' (length=6)

        $callback = $this->routes[$method][$path] ?? false;

        if ($callback === false) {
            return 'no callback written against the path ' . $path;
        }

        if (is_string($callback)) {
            return $this->renderView($callback);
        }

        return call_user_func($callback);

    }

    public function renderView($view) {
        return include_once __DIR__ . "/../views/$view.php";
    }

}