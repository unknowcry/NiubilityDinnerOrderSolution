<?php

require_once"./libs/Medoo.php";
require_once"./libs/littleTools.php";

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

//实例化一个对象，参数为表名，所有列的名字，低权限账户无法看到的数据列名
//构建对象过程中只是存入了一些参数，数据并没有从数据库中提取
//如果需要数据，getdata的函数返回值都是包含数据的数组。
class operateDataOnTableFromDatabase extends sqlinit{
    private $database;
    private $tableName;
    private $seriesOnTable=array();//表格列名
    private $notAccessibleSeries=array();//用于剔除低权限不可访问的数据
    private $lowRightSeries=array();//保存低权限可访问列名
    private $allData;
    private $lowRightAccessibleData;

    public function __construct($tableName,$seriesOnTable,$notAccessibleSeries){
        $this->tableName=$tableName;
        $this->seriesOnTable=$seriesOnTable;
        $this->notAccessibleSeries=$notAccessibleSeries;
        $database = new sqlinit();
        $this->database=$database->getDatabase();
        $littleTools=new littleTools();
        $this->lowRightSeries=$littleTools->delItemsFromArrayWithoutKey($this->seriesOnTable,$this->notAccessibleSeries);
    }
    public function getAllData(){
        $this->allData=$this->database->select($this->tableName,"*");
        return $this->allData;
    }
    public function getLowRightAccessibleData(){
        $littleTools=new littleTools();
        $this->lowRightAccessibleData=$littleTools->delItemsFromArray($this->allData,$this->notAccessibleSeries);
        return $this->lowRightAccessibleData;
    }
}

class seriesOnTable{
    private $restaurant;
    private $restaurantSeries;
    private $restaurantLowRightS;
    private $notAccessibleRestaurant;
    private $indent;
    private $indentSeries;
    private $indentLowRightS;
    private $notAccessibleIndent;
    private $customer;
    private $customerSeries;
    private $customerLowRightS;
    private $notAccessibleCustomer;
    private $dish;
    private $dishSeries;
    private $dishLowRightS;
    private $notAccessibleDish;
    public function __construct(){
        //TODO 填写这个列表 每个表名，每个表头，每个表低权限可达列,每个表不可达列
    }
}
