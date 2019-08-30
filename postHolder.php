<?php
print("post:");
print_r($_POST);

if(isset($_POST["option"])){
    switch($_POST["option"]){
        case "login":{
            switch($_POST["type"]){
                case "0":{
                    break;
                }
                case "1":{
                    break;
                }
                case "2":{
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

