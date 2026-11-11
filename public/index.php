<?php

// go one step up and there is composer.json file
require_once __DIR__ . '/../vendor/autoload.php';

use app\core\Application;


$app = new Application(dirname(__DIR__));

/*
|--------------------------------------------------------------------------
| todo: routes
|--------------------------------------------------------------------------
*/

$app->router->get('/', 'home');

// this is where we are passing the callback
$app->router->get('/users', function () {
    return 'users';
});

$app->router->get('/contact', 'contact');

/*
|--------------------------------------------------------------------------
| todo: run
|--------------------------------------------------------------------------
*/

$app->run();





