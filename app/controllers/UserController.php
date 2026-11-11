<?php

namespace controllers;

use core\Controller;
use models\User;

class UserController extends Controller {

    public function index(): void {
        require_once __DIR__ . '/../Models/User.php';

        $user = new User();

        $this->view('users/index', [
            'users' => $user->all(),
        ]);
    }

}