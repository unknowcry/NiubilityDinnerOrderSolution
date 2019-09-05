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

function delItemsFromArray($dataArray,$itemKeys){
    //just for array whitch has array key
    $newDataArray=$dataArray;
    for($i=0;$i<count($itemKeys);$i++){
        $newDataArray=$this->delOneItemFromArray($newDataArray,$itemKeys[$i]);
    }
    return $newDataArray;
}

function delOneItemFromArrayWithoutKey($dataArray,$item){
    //judge the value of array item
    $newDataArray=array();
    for($i=0;$i<count($dataArray);$i++){
        if($dataArray[$i]!==$item){
            $newDataArray[]=$dataArray[$i];
        }
    }
    return $newDataArray;
}

function delItemsFromArrayWithoutKey($dataArray,$items){
    //$items is an array();
    $newDataArray=$dataArray;
    for($i=0;$i<count($items);$i++){
        $newDataArray=$this->delOneItemFromArrayWithoutKey($newDataArray,$items[$i]);
    }
    return $newDataArray;
}

function getBigger($a,$b){
    return $a>$b?$a:$b;
}

function getSmaller($a,$b){
    return $a<$b?$a:$b;
}

function isInArray($array,$item){
    for($i=0;$i<count($array);$i++){
        if($array[$i]==$item){
            return true;
        }
    }
    return false;
}