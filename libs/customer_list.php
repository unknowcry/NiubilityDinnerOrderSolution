<?php

require_once"./sqlinit.php";
require_once"./libs/debugManager.php";

use Medoo\Medoo;

class customer_list{
    private $db;
    private $allData;
    private $restaurantAvailableData;

    function __construct(){
        $sql=new sqlinit();
        $this->db=$sql->getDatabase();
    }

    function getAllData(){
        $this->allData=$this->db->select("customer","*");
        return $this->allData;
    }

    function getRestaurantAvailableData(){
        $this->allData=$this->db->select("customer","*");
        for($i=0;$i<count($this->allData);$i++){
            $this->restaurantAvailableData[$i]["userName"]=$this->allData[$i]["userName"];
            $this->restaurantAvailableData[$i]["phoneNumber"]=$this->allData[$i]["phoneNumber"];
            $this->restaurantAvailableData[$i]["address"]=$this->allData[$i]["address"];
        }
        return $this->restaurantAvailableData;
    }

    function selectIByID($id){
        return $data=$this->db->select("customer","*",["id"=>$id]);
    }

    function selectByUserName($userName){
        return $data=$this->db->select("customer","*",["userName"=>$userName]);
    }

    function selectByPhoneNumber($PhoneNumber){
        return $data=$this->db->select("customer","*",["PhoneNumber"=>$PhoneNumber]);
    }

    function insert($data){
        $lastUserID=$this->db->insert("customer","$data");
        return $lastUserID;
    }

    function deleteByID(s$id){
        return $this->db->delete("customer",["id"=>$id]);
    }

    function deleteByUserName($userName){
        return $this->db->delete("customer",["userName"=>$userName]);
    }

    function deleteByPhoneNumber($PhoneNumber){
        return $this->db->delete("customer",["PhoneNumber"=>$PhoneNumber]);
    }

    function update($data,$where){
        return $this->db->update("customer","$data","$where");
    }

}

?>
