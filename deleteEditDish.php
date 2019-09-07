<?php
require_once"./sqlinit.php";

$dishAvailable = 1;
$header_time = 1;
$header_url = "dishList.html";


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





                //获取上传的图片
                $image = $_FILES['image'];

                //判断获得变量
                if ($image['error'] > 0) {
                    $error = "上传失败了,原因是";

                    switch ($image['error']) {
                        case 1:
                            $error .= "大小超过了服务器设置的限制！";
                            break;
                        case 2:
                            $error .= "文件大小超过了表单的限制！";
                            break;
                        case 3:
                            $error .= "文件只有部分被上传！";
                            break;
                        case 4:
                            $error .= "没有文件被上传!";
                            break;
                        case 6:
                            $error .= "上传文件的临时目录不存在！";
                            break;
                        case 7:
                            $error .= "写入失败!";
                            break;
                        default:
                            $error .= "未知的错误！";
                            break;
                    }
                    //输出错误
                    header("refresh:$header_time;url=$header_url");
                    exit($error);
                } else {
                    //截取文件后缀名
                    $type = strrchr($image['name'], ".");

                    //设置上传路径，我把它放在了upload下的interview目录下（需要在linux中给interview设置文件夹权限）
                    // $path = "./public/upload/interview/" . $image['name']; 
                    $path = "./dishPictures/" . $image['name']; 

                    //判断上传的文件是否为图片格式
                    if (strtolower($type) == '.png' || strtolower($type) == '.jpeg' || strtolower($type) == '.jpg' || strtolower($type) == '.bmp' || strtolower($type) == '.gif') {
                        //将图片文件移到该目录下
                        $move_result = move_uploaded_file($image['tmp_name'], $path);
                        if(!$move_result){
                            echo "文件移动错误";
                            header("refresh:$header_time;url=$header_url");
                        } else {
                            $dishTitle = $_POST["dishTitle"];
                            $price = $_POST["price"];
                            // print_r($dishTitle);
                            // print_r($price);
                            // $table= new listOnTable();
                            // $list_dish=$table->getListOnTable('dish');
                            // $sql_dish= new operateDataOnTableFromDatabase($list_dish);


                            $showPictureFileName = $image['name'];

                            // $back = $sql_dish->insert(["restaurantID"=>$restaurantID,"dishTitle"=>$dishTitle,"dishAvailable"=>$dishAvailable,"price"=>$price,"showPictureFileName"=>$showPictureFileName]);
                            // header("refresh:$header_time;url=$header_url");
                            // echo "上传成功，跳转中。。。";
                            // print_r($back);



                            $list=new listOnTable();
                            $name=$list->getListOnTable($tableName);
                            $database=new operateDataOnTableFromDatabase($name);
                            // echo $tableName;
                            // echo $dishTitle;
                            // echo $price;
                            // echo $id;
                            $back=$database->update(["dishTitle"=>$dishTitle,"price"=>$price,"showPictureFileName"=>$showPictureFileName],["id"=>$id]);
                            // print_r($back);
                            header("refresh:$header_time;url=$header_url");
                            echo "上传成功，跳转中。。。";
                        }
                    }
                }








        }
        else{
            setcookie("dishid",$id,time()+3600);
            header("Location: editDish.html");
        }        
    }
    default:{}
}

?>