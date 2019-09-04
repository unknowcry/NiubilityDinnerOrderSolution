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
print_r($_COOKIE);

switch($_COOKIE["user"]){
    case "admin":{
        print("<br>here is in admin case under switch");
        break;
    }
    default:{

        break;
    }
}