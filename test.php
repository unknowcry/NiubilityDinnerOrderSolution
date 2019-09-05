<?php
require "./sqlinit.php";
$database=new operateDataOnTableFromDatabase($listOnTable->getListOnTable('restaurant'));
$array=array();
$array[]="id";
$array[]="userName";
$array[]="passwd";
$data=$database->selectDataByOtherSeries($array);
print_r($data);