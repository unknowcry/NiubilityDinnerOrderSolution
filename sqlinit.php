<?php
require_once"./libs/Medoo.php";
require_once"./libs/littleTools.php";
use Medoo\Medoo;
class sqlinit{
    private $database_type='mysql';
    private $database_name='order_db';
    //private $server='39.106.222.231';
    private $server='127.0.0.1';
    private $username='root';
    private $passwd='wolf';
    private $charset='utf8';
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
        $this->appraise=$data["appraise"];
    }
    public function getCon(){
        $data=array();
        $data["id"]=$this->id;
        $data["time"]=$this->time;
        $data["customerID"]=$this->customerID;
        $data["content"]=$this->content;
        $data["price"]=$this->price;
        $data["status"]=$this->status;
        $data["appriase"]=$this->appraise;
        return $data;
    }
}
class identFull_item extends indent_item{
}
//实例化一个对象，参数为表名，所有列的名字，低权限账户无法看到的数据列名
//构建对象过程中只是存入了一些参数，数据并没有从数据库中提取
//如果需要数据，getdata的函数返回值都是包含数据的数组。
class operateDataOnTableFromDatabase{
    private $database;
    private $tableName;
    private $seriesOnTable=array();//表格列名
    private $notAccessibleSeries=array();//用于剔除低权限不可访问的数据
    private $lowRightSeries=array();//保存低权限可访问列名
    private $allData;
    private $lowRightAccessibleData;
    public function __construct($listOnTable){
        $this->tableName=$listOnTable[0];
        $this->seriesOnTable=$listOnTable[1];
        $this->notAccessibleSeries=$listOnTable[2];
        $this->lowRightSeries=$listOnTable[3];
        $database = new sqlinit();
        $this->database=$database->getDatabase();
    }
    public function getAllData(){
        $this->allData=$this->database->select($this->tableName,"*");
        return $this->allData;
    }
    public function getLowRightAccessibleData(){
        $this->lowRightAccessibleData=$this->database->select($this->tableName,$this->lowRightSeries);
        return $this->lowRightAccessibleData;
    }
    function selectDataByOtherSeries($series){
        $data=$this->database->select($this->tableName,$series);
        return $data;
    }
    function selectAllDataByID($id){
        $data=$this->database->select($this->tableName,"*",["id"=>$id]);
        return $data;
    }
    function selectLowRightAccessibleDataByID($id){
        $data=$this->database->select("$this->tableName",$this->lowRightSeries,["id"=>$id]);
        return $data;
    }
    function selectAlldataByUserName($userName){
        $data=$this->database->select($this->tableName,"*",["userName"=>$userName]);
        return $data;
    }
    function selectLowRightAccessibleDataByUserName($userName){
        $data=$this->database->select($this->tableName,$this->lowRightSeries,["userName"=>$userName]);
        return $data;
    }
    function deleteByID($id){
        return $this->database->delete($this->tableName,["id"=>$id]);
    }
    function insert($data){
        return $this->database->insert($this->tableName,$data);
    }
    function update($data,$where){
        return $this->database->update($this->tableName,$data,$where);
    }
    function updateByID($data,$id){
        return $this->database->update($this->tableName,$data,["id"=>$id]);
    }
}

class listOnTable{
    public $tableName=array();
    public $Series=array();
    public $notAccessibleSeries=array();
    public $lowRightSeries=array();
    public function __construct(){
        //TODO 填写这个列表 每个表名，每个表头，每个表低权限可达列,每个表不可达列
        $this->tableName['restaurant']='restaurant';
        $this->tableName['dish']='dish';
        $this->tableName['customer']='customer';
        $this->tableName['indent']='indent';
        $this->Series['restaurant']=['id','userName','passwd','phoneNumber','address','restaurantName','introduction'];
        $this->Series['dish']=['id','restaurantID','dishTitle','dishAmount','price','showPictureFileName'];
        $this->Series['customer']=['id','userName','passwd','phoneNumber','address'];
        $this->Series['indent']=['id','time','customerID','content','price','status','appraise'];
        $this->notAccessibleSeries['restaurant']=['passwd'];
        $this->notAccessibleSeries['dish']=null;
        $this->notAccessibleSeries['customer']=['passwd'];
        $this->notAccessibleSeries['indent']=null;
        $this->lowRightSeries['restaurant']=['id','userName','phoneNumber','address','restaurantName','introduction'];
        $this->lowRightSeries['dish']=$this->Series;
        $this->lowRightSeries['customer']=['id','userName','phoneNumber','address'];
        $this->lowRightSeries['indent']=$this->Series;
    }
    public function getListOnTable($tableName){
        $data=array();
        $data[]=$this->tableName[$tableName];
        $data[]=$this->Series[$tableName];
        $data[]=$this->notAccessibleSeries[$tableName];
        $data[]=$this->lowRightSeries[$tableName];
        return $data;
    }
}
$listOnTable=new listOnTable();

