<?php
namespace App;

class DbCreateTables {

	private $db;

	public function __construct($db) {
        $this->db = $db;
    }

    public function createTables() {
        $commands = ['CREATE TABLE IF NOT EXISTS users (
                        id INTEGER PRIMARY KEY,
                        name TEXT NOT NULL,
                        email TEXT NOT NULL,
                        password TEXT NOT NULL
                      )',
            'CREATE TABLE IF NOT EXISTS companies (
                    id INTEGER PRIMARY KEY,
                    name TEXT NOT NULL,
                    city  TEXT NOT NULL,
                    phone TEXT,
                    info TEXT,
                    created_by TEXT
                    )'];
        // execute the sql commands to create new tables
        foreach ($commands as $command) {
            $this->db->exec($command);
        }
    }

}