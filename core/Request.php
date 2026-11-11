<?php

namespace app\core;

class Request {

    // only the base path, without parmams
    public function getPath() {
        // '/users?id=1'
        $path = $_SERVER['REQUEST_URI'] ?? '/';

        // the first occurrence of the substring or false
        $position = strpos($path, '?');

        // we dont have ? in the uri
        if ($position === false) {
            return $path;
        }

        return substr($path, 0, $position);
    }

    public function getMethod(): string {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

}