<?php

namespace models;

use core\Model;
use PDO;

class User extends Model {

    public function all(): array {
        /** @lang SQL */
        $query = <<<SQL
            select * from users order by created_at desc;
            SQL;

        $stmt = $this->db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function activeUsers(): array {
        /** @lang sql */
        $query = <<<sql
            select * from users where status = 'active' order by  created_at desc;
            sql;
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}