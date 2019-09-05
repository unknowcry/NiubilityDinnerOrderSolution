<?php

require_once"./sqlinit.php";
require_once"./libs/littleTools.php";

use Medoo\Medoo;

// $id=$_COOKIE["id"];



$table= new listOnTable();
$list_dish=$table->getListOnTable('dish');
$sql_dish= new operateDataOnTableFromDatabase($list_dish);

$data= $sql_dish->getAllData($sql_dish);

echo json_encode($data);

?>