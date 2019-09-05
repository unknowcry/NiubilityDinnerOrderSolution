<?php
require_once "./libs/cookieManager.php";
require"./libs/debugManager.php";
$debugManager = new debugManager();
$debugManager->debugOn();
if($debugManager->isDebugOn()){
    print("post: ");
    print_r($_POST);
    print("<br>");
    //print("get: ");
    //print_r($_GET);
}


if(isset($_POST["operate"])){
    switch($_POST["operate"]){
        case "login":{
            //TODO new 一个数据库holder
            require_once "./sqlinit.php";
            $table=null;
            $array=array();
            $array[]="id";
            $array[]="userName";
            $array[]="passwd";
            $nextPage=null;
            switch($_POST["type"]){
                case "0":{
                    $table=$listOnTable->getListOnTable('customer');
                    $nextPage='./order.html';
                    //TODO 确定表是customer
                    //已知 username 先查找是否有username，没有则显示error界面，提示是否创建用户
                    //新用户必须完全填写账户信息，否则无法下单选择
                    //如果验证正确，则跳转到个人中心&&商店列表 同时保存账户信息到cookie 在有效期内login直接跳转到用户个人中心&&商店界面
                    //TODO 点击退出账号 删除cookie 没有cookie login无法自动跳转
                    break;
                }
                case "1":{
                    //TODO 确定表是restaurant
                    //流程类似顾客
                    $table=$listOnTable->getListOnTable('restaurant');
                    $nextPage='./restaurant.html';
                    break;
                }
            }
            if($debugManager->isDebugOn()){
                print("table<br>");
                print_r($table);
            }
            $database=new operateDataOnTableFromDatabase($table);
            $data=$database->selectDataByOtherSeries($array);
            print_r($data);
            /*
            $userNameexists=false;
            $isPasswdCorrect=false;
            for($i=0;$i<count($data);$i++){
                if($data[$i]['userName']==$_POST['userName']){
                    $userNameexists=true;
                    if($data[$i]['passwd']==$_POST['passwd']){
                        $isPasswdCorrect=true;
                        $cookie=new cookieManager('id',$data[$i]['id']);
                        break;
                    }
                }
            }*/
                    /*
                    if(!$userNameexists){
                        print('用户名不存在，将为你创建新账户<br>');
                        $database->insert(['id']);
                    }else{
                        if(!$isPasswdCorrect){
                            print('密码错误，请重新登录!<br>');
                            Header("Location: ./index.html");
                        }else{
                            print('用户名密码正确，正在为您重定向!<br>');
                            $cookie=new cookieManager('userName',$_POST['userName']);
                            $cookie=new cookieManager('islogedin','1');
                            Header("Location: ./restaurant.php");
                        }
                    }*/



        }
        case "getdata":{
            switch($_POST["type"]){
                case "alldata":{
                    //tablename $_POST['tablename'];
                    require_once"./sqlinit.php";
                    $database=new operateDataOnTableFromDatabase($listOnTable->getListOnTable($this->tableName['']));
                    break;
                }
                case "byid":{
                    //tablename id
                    break;
                }
                case "byotherseries":{
                    //tablename seriesname
                    break;
                }
            }
            break;
        }
        case "deldata":{
            //删除记录 传入表名和id
            print_r($_POST);
            break;
        }
        case "modifydata":{
            //tablename id seriesname newdata
            $_POST['tableName'];

            break;
        }
        case "adddata":{
            //tablename [array];
            //TODO 将文件从上传的tmp目录保存到./pic
            require_once"./sqlinit.php";
            $database=new operateDataOnTableFromDatabase($listOnTable->getListOnTable($_POST['tableName']));
            
            break;
        }
    }
}
