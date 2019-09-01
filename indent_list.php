<?php

require_once"./sqlinit.php";
require_once"./libs/debugManager.php";

use Medoo\Medoo;

class indent_list{
    private $db;
    private $allData;

    function __construct(){
        $sql=new sqlinit();
        $this->db=$sql->getDatabase();
    }

    function getAllData(){
        $this->allData=$this->db->select("indent","*");
        return $this->allData;
    }

    function selectByID( $id ){
        return $data=$this->db->select("indent","*",["id"=>$id]);
    }

    function selectByCustomerID($customerID){
        return $data=$this->db->select("indent","*",["customerID"=>$customerID]);
    }

    function selectByPrice($price){
        return $data=$this->db->select("indent","*",["price"=>$price]);
    }

    function selectByStatus($status){
        return $data=$this->db->select("indent","*",["status"=>$status]);
    }

    function select_Others($columns, $where){
        return $data=$this->db->select("indent",$columns,$where);
    }

    function insert($data){
        $lastUserID=$this->db->insert("indent","$data");
        return $lastUserID;
    }

    function deleteByID( $id ){
        return $this->db->delete("indent",["id"=>$id]);
    }

    function update($data,$where){
        return $this->db->update("indent","$data","$where");
    }


}

?>
