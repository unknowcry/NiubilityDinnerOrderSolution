<?php
require_once"./sqlinit.php";

$id=$_GET["id"];
$tableName="dish";
switch($_GET["operate"]){
    case "del":{
        $list=new listOnTable();
        $name=$list->getListOnTable($tableName);
        $database=new operateDataOnTableFromDatabase($name);
        $back=$database->deleteByID($id);
        header("Location: dishList.html");
        break;
    }
    case "edit":{
        if(isset($_POST["dishTitle"])&&isset($_POST["price"])){
            $id=$_COOKIE["dishid"];
            $dishTitle=$_POST["dishTitle"];
            $price=$_POST["price"];
            $list=new listOnTable();
            $name=$list->getListOnTable($tableName);
            $database=new operateDataOnTableFromDatabase($name);
            // echo $tableName;
            // echo $dishTitle;
            // echo $price;
            // echo $id;
            $back=$database->update(["dishTitle"=>$dishTitle,"price"=>$price],["id"=>$id]);
            // print_r($back);
            header("Location: dishList.html");
        }
        else{
            setcookie("dishid",$id,time()+3600);
            header("Location: editDish.html");
        }        
    }
    default:{}
}

?>