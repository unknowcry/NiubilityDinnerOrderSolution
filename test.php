<?php

$tableName='dish';
require_once"./sqlinit.php";
$database=new operateDataOnTableFromDatabase($listOnTable->getListOnTable($tableName));
$data=$database->selectAllDataByID(15);
echo(json_encode($data));