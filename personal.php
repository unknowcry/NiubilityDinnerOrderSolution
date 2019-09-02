<?php
if(!isset($_COOKIE["islogedin"])){
    exit();
}else{
    if($_COOKIE["islogedin"]!=1){
        exit();
    }
}
if(!isset($_COOKIE["user"])){
    exit();
}

require_once "./libs/debugManager.php";
$debugManager=new debugManager();
if($debugManager->isDebugOn()){
    print("background!!!<br>");
}

switch($_COOKIE["user"]){
    case "admin":{
        require "./bin/background.php";
        break;
    }
    default:{
        require "./libs/restaurant_list.php";

        break;
    }
}