<!-- <?php
setcookie("id",1,time()+3600);
?> -->

<?php

require_once"./sqlinit.php";
require_once"./libs/littleTools.php";

use Medoo\Medoo;



$status_str=array();
$status_str[0]="商家已接单";
$status_str[1]="订单配送中";
$status_str[2]="订单已送达";
$status_str[3]="订单已取消";
$status_str[4]="订单未完成";
$status_str[5]="订单未评价";
$status_str[6]="订单已评价";
$status_str[7]="订单信息丢失";


$id=$_COOKIE["id"];



$table= new listOnTable();
$list_indent=$table->getListOnTable('indent');
$sql_indent= new operateDataOnTableFromDatabase($list_indent);
$data= $sql_indent->select_IndentByCustomerID($id);
// print_r($data);
// echo "<br/>";
$length=count($data);
// print_r($length);
// echo "<br/>";

$list_dish=$table->getListOnTable('dish');
$sql_dish= new operateDataOnTableFromDatabase($list_dish);
$all_dish_am=array();
for($i=0;$i<$length;$i++){// to alter $i
    $dish_amount=array();
    // echo "$i : ";
    $content= $data[$i]["content"];
    // print_r($content);
    // echo "<br/>";
    $cont=json_decode($content);
    // echo "////////// <br/>";
    // print_r($cont);
    // echo "////  <br/>";
    $con_len=count($cont);
    // echo "--------$con_len";
    // echo "<br/>";
    for($j=0;$j<$con_len;$j++){
        $tmp=$sql_dish->select_DishByRestaurantID($cont[$j][0]);
        // print_r($tmp);
        // echo "<br/>";
        
        $list_restaurant=$table->getListOnTable('restaurant');
        $sql_restaurant= new operateDataOnTableFromDatabase($list_restaurant);
        $restaurant=$sql_restaurant->selectLowRightAccessibleDataByID($tmp[0]["restaurantID"]);
        $restaurantName=$restaurant[0]["restaurantName"];
        // echo "////////// <br/>";
        // print_r($restaurantName);
        // echo "////  <br/>";
        $dish_amount_con=array();
        $dish_amount_con[]=$restaurantName;
        $dish_amount_con[]=$tmp[0]["dishTitle"];
        $dish_amount_con[]=$cont[$j][1];
        $dish_amount[]=$dish_amount_con;
        // echo "<br/>";
    }
    // print_r($dish_amount);
    // echo "<br/>";
    $data[$i]["content"]=$dish_amount;


    if($data[$i]["status"]=="" || $data[$i]["status"]==null){
        $data[$i]["status"]=7;
    }
    $data[$i]["status"]=$status_str[$data[$i]["status"]];
    
    if($data[$i]["appraise"]=="" || $data[$i]["appraise"]==null){
        $data[$i]["appraise"]="用户未评价";
    }


    // print_r($data[$i]["content"]);
    // echo "<br/>";
}
// $data
// echo "*****************<br/>";
// print_r($data);
// echo "<br/>";
// echo "------------------<br/>";
echo json_encode($data);

?>