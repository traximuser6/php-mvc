<?php

require_once __DIR__ . '/../core/Router.php';

$router = new \core\Router();

require_once __DIR__ . '/../routes/web.php';

$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);