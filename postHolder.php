<?php
require"./libs/debugManager.php";
$debugManager = new debugManager();
$debugManager->debugOff();
if($debugManager->isDebugOn()){
    print("post: ");
    print_r($_POST);
    print("<br>");
    print("get: ");
    print_r($_GET);
}


if(isset($_POST["operate"])){
    switch($_POST["operate"]){
        case "login":{
            //TODO new 一个数据库holder
            switch($_POST["type"]){
                case "0":{
                    $username="admin";
                    $password="admin";
                    //print("aaa");
                    if($_POST["username"]==$username){
                        if($_POST["passwd"]==$password){
                            print("loged in!!!");
                            setcookie("user","admin",time()+3600);
                            setcookie("islogedin","1",time()+3600);
                            //Header("HTTP/1.1 303 See Other");
                            Header("Location: ./personal.php");
                        }
                        else{
                            print("wrong password!!!");
                        }
                    }else{
                        print("wrong username!!!");
                    }
                    break;
                    exit();
                }
                case "1":{
                    require_once "./sqlinit.php";

                    //TODO 确定表是customer
                    //已知 username 先查找是否有username，没有则显示error界面，提示是否创建用户
                    //新用户必须完全填写账户信息，否则无法下单选择
                    //如果验证正确，则跳转到个人中心&&商店列表 同时保存账户信息到cookie 在有效期内login直接跳转到用户个人中心&&商店界面
                    //TODO 点击退出账号 删除cookie 没有cookie login无法自动跳转
                    break;
                    exit();
                }
                case "2":{
                    //TODO 确定表是restaurant
                    //流程类似顾客
                    break;
                    exit();
                }
            }
            break;
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
