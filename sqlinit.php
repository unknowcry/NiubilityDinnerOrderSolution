<?php

require_once"./libs/Medoo.php";

use Medoo\Medoo;

class sqlinit{
    private $database_type='mysql';
    private $database_name='order';
    private $server='127.0.0.1';
    private $username='root';
    private $passwd='wolf';
    private $charset='utf8';
    private $tablelist=array();
    protected function setTableList(){
        $this->tablelist["dish"]="dish";
        $this->tablelist["customer"]="customer";
        $this->tablelist["restaurant"]="restaurant";
        $this->tablelist["indent"]="indent";
    }
    public function getDatabase(){
        return $this->__construct();
    }
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

class userSeedClass{//cant use directly
    private $id;
    private $userName;
    private $passwd;
    private $phoneNumber;
    private $address;
    //abstract public function __construct($data);
    //abstract public function getCon();
    public function checkPasswd($inputPasswd){
        if($this->passwd===$inputPasswd){
            return true;
        }else{
            return false;
        }
    }
}

class dish_item{//same as the table
    private $id;
    private $restaurantID;
    private $dishTitle;
    private $dishAmount;
    private $price;
    private $showPictureFileName;
    public function __construct($data){
        $this->id = $data["id"];
        $this->restaurantID = $data["restaurantID"];
        $this->dishTitle = $data["dishTitle"];
        $this->dishAmount = $data["dishAmount"];
        $this->price = $data["price"];
        $this->showPictureFileName = $data["showPictureFileName"];
    }
    public function getCon(){
        $data = array();
        $data["id"]=$this->id;
        $data["restaurantID"]=$this->restaurantID;
        $data["dishTitle"]=$this->restaurantID;
        $data["dishAmount"]=$this->dishAmount;
        $data["price"]=$this->price;
        $data["showPictureFileName"]=$this->showPictureFileName;
        return $data;
    }
}

class customer_item extends userSeedClass{//same as the table
    public function __construct($data){
        $this->id = $data["id"];
        $this->userName = $data["userName"];
        $this->passwd = $data["passwd"];
        $this->phoneNumber = $data["phoneNumber"];
        $this->address = $data["address"];
    }
    public function getCon(){
        $data = array();
        $data["id"]=$this->id;
        $data["userName"]=$this->userName;
        $data["passwd"]=$this->passwd;
        $data["phoneNumber"]=$this->phoneNumber;
        $data["address"]=$this->address;
        return $data;
    }
}

class restaurant_item extends userSeedClass{//same as the table
    private $restaurantName;
    private $introduction;
    public function __construct($data){
        $this->id = $data["id"];
        $this->userName = $data["userName"];
        $this->passwd = $data["passwd"];
        $this->phoneNumber = $data["phoneNumber"];
        $this->address = $data["address"];
        $this->introduction = $data["introduction"];
    }
    public function getCon(){
        $data = array();
        $data["id"]=$this->id;
        $data["userName"]=$this->userName;
        $data["passwd"]=$this->passwd;
        $data["phoneNumber"]=$this->phoneNumber;
        $data["address"]=$this->address;
        $data["introduction"]=$this->introduction;
        return $data;
    }
}

class indent_item{
    private $id;
    private $time;
    private $customerID;
    private $content = array();
    private $price;
    private $status;
    public function __construct($data){
        $this->id=$data["id"];
        $this->time=$data["time"];
        $this->customerID=$data["customerID"];
        $this->content=json_decode($data["content"]);//id&&amount
        $this->price=$data["price"];
        $this->status=$data["status"];
    }
    public function getCon(){
        $data=array();
//TODO add the lost lines
        return $data;
    }
}

class identFull_item extends indent_item{
}


class sqlOperate extends sqlinit{

}