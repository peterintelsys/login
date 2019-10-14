<?php
namespace App;

class Db {

	private $db;

	public function connect() {
        if ($this->db == null) {
            $this->db = new \PDO("sqlite:db/login.db");
        }
        return $this->db;
    }


}