<?php
include_once('config.php');

use App\DbInsert;
use App\Authenticate;


/*$insert = new DbInsert($db);
$userid1 = $insert->insertUser('Peter', 'peter@gmail.com', '12345');
$userid2 = $insert->insertUser('Melvin', 'melvin@gmail.com', '12345');*/

$auth = new Authenticate($db);
$auth->login();


include('views/start.php');