<?php

function delOneItemFromArray($dataArray,$itemKey){
    //just for array whitch has array key
    $newDataArray=array();
    $dataArrayKeys=array_keys($dataArray);
    for($i=0;$i<count($dataArray);$i++){
        if($dataArrayKeys[$i]!=$itemKey){
            $newDataArray[$dataArrayKeys[$i]]=$dataArray[$dataArrayKeys[$i]];
        }
    }
    return $newDataArray;
}

function getBigger($a,$b){
    return $a>$b?$a:$b;
}

function getSmaller($a,$b){
    return $a<$b?$a:$b;
}
