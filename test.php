<?php

require "./sqlinit.php";


$database=new operateDataOnTableFromDatabase($listOnTable->getListOnTable('restaurant'));
$data=$database->getAllData();
//$data=$database->getAllData();
print_r($data);
