<?php
require 'vendor/autoload.php';
session_start();

use App\Db;
use App\DbCreateTables;

$db = new Db;
$db = $db->connect();

$createTable = new DbCreateTables($db);
$createTable->createTables();