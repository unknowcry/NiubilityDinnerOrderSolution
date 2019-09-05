<?php
//require_once "./libs/cookieManager.php";
require "./libs/debugManager.php";
require "./libs/littleTools.php";
$debugManager = new debugManager();
$debugManager->debugOn();
if($debugManager->isDebugOn()){
    print("post: <br>");
    print_r($_POST);
    print("<br>");
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
                    $table='customer';
                    $nextPage='./order.php';
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
                    $table='restaurant';
                    $nextPage='./dishList.html';
                    break;
                }
            }
            // if($debugManager->isDebugOn()){
            //     print("table<br>");
            //     print_r($table);
            //     print("<br>");
            // }
            $database=newsqlinit();
            $data=$database->select($table,["id","userName","passwd"]);

            // if($debugManager->isDebugOn()){
            //     print("data<br>");
            //     print_r($data);
            //     print("<br>");
            // }


            $userNameexists=false;
            $isPasswdCorrect=false;
            $id=null;
            for($i=0;$i<count($data);$i++){
                if($data[$i]['userName']==$_POST['userName']){
                    $userNameexists=true;
                    if($data[$i]['passwd']==$_POST['passwd']){
                        $isPasswdCorrect=true;
                        $id=$data[$i]['id'];
                        //setcookie('userName',$_POST['userName'],time()+3600);
                        //setcookie('id',1,time()+3600);
                        //setcookie('islogedin',1,time()+3600);
                        //header('Location: http://www.baidu.com/');
                        break;
                    }
                }
            }
            if(!$userNameexists){
                //print('用户不存在，将为你创建新账户<br>');
                //$database->insert(["id"=>])
                print('用户名不存在,已为你创建新账户<br>');
            }else{
                if(!$isPasswdCorrect){
                    print('密码错误，请重新登陆<br>');
                    print('<a href="./index.html">重新登陆</a>');
                }else{
                    print('用户名密码正确，正在为您重定向!<br>');
                    setcookie('id',$id,time()+3600);
                    setcookie('islogedin',1,time()+3600);
                    setcookie('userName',$_POST['userName'],time()+3600);
                    setcookie('logintype',$_POST['type'],time()+3600);
                    header("Location: $nextPage");
                }
            }
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
                case "alldata":{//从确定的表中获取全部列的数据
                    $tableName=$_POST['tableName'];
                    require_once"./sqlinit.php";
                    $database=newsqlinit();
                    $data=$database->select($tableName,"*");
                    echo(json_encode($data));
                    //echo("hello");
                    break;
                }
                case "byid":{//从确定的表中获取某一确定的id对应的数据
                    //tablename id
                    $tableName=$_POST['tableName'];
                    $id=$_POST['id'];
                    $database=new operateDataOnTableFromDatabase($listOnTable->getListOnTable($tableName));
                    $data=$database->selectAllDataByID($id);
                    echo(json_encode($data));
                    break;
                }
                case "byotherseries":{//从确定的表中获取某一确定的某列值的对应数据
                    //tablename seriesname seriesval
                    $tableName=$_POST['tableName'];
                    $seriesName=$_POST['seriesName'];
                    $seriesVal=$_POST['seriesVal'];
                    $database=new operateDataOnTableFromDatabase($listOnTable->getListOnTable($tableName));
                    $data=$database->selectDataByOtherSerie([$seriesName=>$seriesVal]);
                    echo(json_encode($data));
                    break;
                }
                case "getlowrightdata":{
                    $database=new operateDataOnTableFromDatabase($listOnTable->getListOnTable($tableName));
                    $data=$database->getLowRightAccessibleData();
                    echo(json_encode($data));
                    break;
                }
            }
            break;
        }
        case "deldata":{//从确定的表中删除对应id的数据
            //删除记录 传入表名和id
            $tableName=$_POST['tableName'];
            $id=$_POST['id'];
            $database=new operateDataOnTableFromDatabase($listOnTable->getListOnTable($tableName));
            $database->deleteByID($id);
            //print_r($_POST);
            break;
        }
        case "modifydata":{//从确定的表中修改对应id的数据
            //tablename id seriesname newdata
            $tableName=$_POST['tableName'];
            $id=$_POST['id'];
            $seriesName=$_POST['seriesName'];
            $seriesVal=$_POST['seriesVal'];
            $database=new operateDataOnTableFromDatabase($listOnTable->getListOnTable($tableName));
            $database->updateByID([$seriesName=>$seriesVal],$id);
            break;
        }
        case "adddata":{//从确定的表中添加对应的数据
            //tablename [array];
            //TODO 将文件从上传的tmp目录保存到./pic
            require_once"./sqlinit.php";
            //$database=new operateDataOnTableFromDatabase($listOnTable->getListOnTable($_POST['tableName']));
            break;
        }
    }
}else{
    if(isset($_GET["operate"])){
        switch($_GET["operate"]){
            case "del":{
                $tableName=$_GET['tableName'];
                $id=$_GET['id'];
                $database=new operateDataOnTableFromDatabase($listOnTable->getListOnTable($tableName));
                $database->deleteByID($id);
                break;
            }
            case "edit":{
                $tableName=$_GET['tableName'];
                $id=$_GET['id'];
                $database=new operateDataOnTableFromDatabase($listOnTable->getListOnTable($tableName));

                break;
            }
        }
    }
}
