<?php
require('vendor/autoload.php');

use Dcblogdev\PdoWrapper\Database;
// 'host' => "sql205.unaux.com",
//     'database' => "unaux_29489773_db_ntrcamp",
//     'username' => "unaux_29489773",
//     'password' => "4c75qbn4hjbc8"
$options = [
    'host' => "localhost",
    'database' => "db_ntrcamp",
    'username' => "root",
    'password' => ""
];
$db = new Database($options);

$dir = "./";
