<?php
include_once('config.php');

use App\Auth;
$auth = new Auth($db);

$auth->logout();