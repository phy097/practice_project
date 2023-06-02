<?php

include("vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$table = new UsersTable(new MySQL);
$id = $table->insert([
    "name" => "Alice",
    "email" => "alice@gmail.com",
    "phone" => "4689000822",
    "address" => "Yangon",
    "password" => "password",

]);

// $mysql = new MySQL;
// $db = $mysql->connect();
// $result = $db->query("SELECT * FROM roles");

// print_r($result->fetchAll());





