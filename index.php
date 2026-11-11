<?php

require_once __DIR__ . '/vendor/autoload.php';

$app = new \app\core\Application();

use app\core\Application;

$app = new Application();

$app->router->get('/users', function () {
    // todo : users
});

$app->router->get('/contacts', function () {
    // todo: contacts
});

$app->run();






