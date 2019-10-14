<?php
namespace App;

class Auth
{

	private $db;
	public $authId;
	public $authName;
	public $authEmail;

	
	public function __construct($db){
		
		$this->db = $db;
	}

	public function checkAuth(){

		$users = $this->getUser($_SESSION['user']);

		if(!isset($users[0])){
			header("location:index.php");
	      	die();
		}else {
			$user = $users[0];
			$this->authId = $user['id'];
			$this->authName = $user['name'];
			$this->authEmail = $user['email'];
		}

		if(!isset($_SESSION['user'])){
	      	header("location:index.php");
	      	die();
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


	public function logout(){
		if (isset($_SESSION)){
    		unset($_SESSION);
    		session_unset();
    		session_destroy();
			}

		header("Location: index.php");
		
	}


}