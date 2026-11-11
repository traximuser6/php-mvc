<?php

$router = new \core\Router();

$router->get('/', [\controllers\HomeController::class, 'index']);
$router->get('/users', [\controllers\UserController::class, 'index']);



