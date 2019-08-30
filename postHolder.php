<?php
print("post:");
print_r($_POST);

if(isset($_POST["option"])){
    switch($_POST["option"]){
        case "login":{
            //TODO new 一个数据库hoder
            switch($_POST["type"]){
                case "0":{
                    $username="admin";
                    $password="admin";
                    break;
                }
                case "1":{
                    //TODO 确定表是customer
                    //已知 username 先查找是否有username，没有则显示error界面，提示是否创建用户
                    //新用户必须完全填写账户信息，否则无法下单选择
                    //如果验证正确，则跳转到个人中心&&商店列表 同时保存账户信息到cookie 在有效期内login直接跳转到用户个人中心&&商店界面
                    //TODO 点击退出账号 删除cookie 没有cookie login无法自动跳转
                    break;
                }
                case "2":{
                    //TODO 确定表是restaurant
                    //流程类似顾客
                    break;
                }
            }
            break;
        }
        case "":{
            break;
        }
        case "":{
            break;
        }
    }
}

