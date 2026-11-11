<?php

namespace controllers;

use core\Controller;

class HomeController extends Controller {

    public function index(): void {
        $this->view('home', [
            'title' => 'My PHP MVC',
            'message' => 'Welcome to MVC from scratch!',
        ]);
    }

}