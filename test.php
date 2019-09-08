<?php
require_once "./libs/Medoo.php";
use Medoo\Medoo;
$database=new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'order_db',
    'server' => '127.0.0.1',
    'username' => 'root',
    'password' => 'wolf',
    'charset' => 'utf8'
]);
$data=$database->select("dish","*");
print_r($data);