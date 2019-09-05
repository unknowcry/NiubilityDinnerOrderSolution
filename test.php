<?php

require "./sqlinit.php";

print_r($listOnTable->getListOnTable('restaurant'));
$database=new operateDataOnTableFromDatabase($listOnTable->getListOnTable('restaurant'));
//$data=$database->getAllData();
print_r($data);
