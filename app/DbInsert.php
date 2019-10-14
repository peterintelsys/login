<?php
namespace App;

class DbInsert {

	private $db;

	public function __construct($db) {
        $this->db = $db;
    }

    public function insertUser($dname, $demail, $dpassword) {

        $hashed = password_hash($dpassword, PASSWORD_DEFAULT);

        $sql = 'INSERT INTO users(name, email, password) VALUES(:name,:email,:password)';
 
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':name' => $dname,
            ':email' => $demail,
            ':password' => $dpassword
        ]);
 
        return $this->db->lastInsertId();
    }

}