<?php

namespace core;

use PDO;

class Model {

    protected PDO $db;

    public function __construct() {
        $this->db = Database::connection();
    }

}