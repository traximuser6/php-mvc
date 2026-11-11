<?php

namespace app\core;

class Application {

    /*
    |--------------------------------------------------------------------------
    | todo: rootdir should be constant
    |--------------------------------------------------------------------------
    */

    public static string $ROOT_DIR;
    public Request $request;
    public Router $router;

    public function __construct(string $rootPath) {
        self::$ROOT_DIR = $rootPath;
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run() {
        $this->router->resolve();
    }

}