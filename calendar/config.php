<?php
require('vendor/autoload.php');

use Dcblogdev\PdoWrapper\Database;

$options = [
    'host' => "localhost",
    'database' => "db_ntrcamp",
    'username' => "root",
    'password' => ""
];
$db = new Database($options);

$dir = "./";
