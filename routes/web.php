<?php

$router->get('/', [HomeController::class, 'index']);
$router->get('/users', [UserController::class, 'index']);