<?php
namespace App;

class Authenticate
{

	private $db;
	private $inputname = 'email';
	private $inputpassword = 'password';
	public $inputnameError;
	public $inputpasswordError;
	
	public function __construct($db) {
        $this->db = $db;
    }

	public function login(){
		
		$email = null;
		$password = null;
		$errormessage ="hej";

		if ($_SERVER["REQUEST_METHOD"] == "POST"){

			if (empty($_POST[$this->inputname])) {
               $this->inputnameError = "is required";
            	}else {
               	$email = $this->test_input($_POST[$this->inputname]);
            	}

    		if (empty($_POST[$this->inputpassword])) {
               $this->inputpasswordError = "is required";
            	}else {
            	$password = $this->test_input($_POST[$this->inputpassword]);
            	}

		}

		if(!empty($_POST[$this->inputname]) && !empty($_POST[$this->inputpassword])){

			//$users = [];
			$users  = $this->getUser($email);

			if(!isset($users[0])){
				$users = "";
			}else{
				$user = $users[0];

				if($user['email'] === $email && $user['password'] === $password){
					$_SESSION['user'] = $user['email'];
					header("Location: auth.php");
			}
		}

		}



	}

	public function getUser($inputemail){
		$stmt = $this->db->prepare('SELECT id,
                                            name,
                                            email,
                                            password
                                       FROM users
                                      WHERE email = :email;');

		$stmt->execute([':email' => $inputemail]);

		$users =[];

		while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $users[] = [
                'id' => $row['id'],
                'name' => $row['name'],
                'email' => $row['email'],
                'password' => $row['password']
            ];
        }

        return $users;
	}

	

	public function test_input($data){
			$data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
	}

	
}