<?php

require_once"./sqlinit.php";
require_once"./libs/debugManager.php";

use Medoo\Medoo;

class restaurant_list{
    private $db;
    private $allData;
    private $customerAvailableData;

    function __construct(){
        $sql=new sqlinit();
        $this->db=$sql->getDatabase();
    }

    function getAllData(){
        $this->allData=$this->db->select("restaurant","*");
        return $this->allData;
    }
    function getCustomerAvailableData(){
        $this->allData=$this->db->select("restaurant","*");
        for($i=0;$i<count($this->allData);$i++){
            $this->customerAvailableData[$i]["restaurantName"]=$this->allData[$i]["restaurantName"];
            $this->customerAvailableData[$i]["phoneNumber"]=$this->allData[$i]["phoneNumber"];
            $this->customerAvailableData[$i]["address"]=$this->allData[$i]["address"];
            $this->customerAvailableData[$i]["introduction"]=$this->allData[$i]["introduction"];
        }
        return $this->customerAvailableData;
    }

    function selectById( $id ){
        return $data=$this->db->select("restaurant","*",["id"=>$id]);
    }

    function selectByUserName($userName){
        return $data=$this->db->select("restaurant","*",["userName"=>$userName]);
    }

    function selectByPhoneNumber($PhoneNumber){
        return $data=$this->db->select("restaurant","*",["PhoneNumber"=>$PhoneNumber]);
    }

    function insert($data){
        $lastUserId=$this->db->insert("restaurant","$data");
        return $lastUserId;
    }

    function deleteById( $id ){
        return $this->db->delete("restaurant","*",["id"=>$id]);
    }

    function deleteByUserName($userName){
        return $this->db->select("restaurant","*",["userName"=>$userName]);
    }

    function deletePhoneNumber($PhoneNumber){
        return $this->db->select("restaurant","*",["PhoneNumber"=>$PhoneNumber]);
    }

    function update($data,$where){
        return $this->db->update("restaurant","$data","$where");
    }

}

?>
