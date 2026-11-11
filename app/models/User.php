<?php

namespace models;

use core\Model;
use PDO;

class User extends Model {

    public function all(): array {
        $stmt = $this->db->query('SELECT * FROM users');

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}