<?php

require_once"./Medoo.php";

use Medoo\Medoo;

class sqlinit{
    private $database_type='mysql';
    private $database_name='database';
    private $server='127.0.0.1';
    private $username='root';
    private $passwd='passwd';
    private $charset='utf8';
    public function __construct(){
        return new Medoo([
            'database_type' => $this->database_type,
	        'database_name' => $this->database_name,
	        'server' => $this->server,
	        'username' => $this->username,
            'password' => $this->passwd,
            'charset' => $this->charset
        ]);
    }
}
//顾客 菜品 餐馆 订单

class dish_item{
    
}

class customer_item{

}

class restaurant_item{

}

class order_item{

}