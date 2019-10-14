<?php
require 'vendor/autoload.php';

use App\User;

$peter = new User('Peter', 'peter@gmail.com', '12345');

$js = json_encode($peter);

echo $js;