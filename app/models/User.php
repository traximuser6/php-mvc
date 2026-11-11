<?php

namespace models;

use core\Model;
use PDO;

class User extends Model {

    public function all(): array {
        /** @lang SQL */
        $query = <<<SQL
            SELECT * 
            FROM users
            WHERE status = 'active'
            ORDER BY created_at DESC;
            SQL;

        $stmt = $this->db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}