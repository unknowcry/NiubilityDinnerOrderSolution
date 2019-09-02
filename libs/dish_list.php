<?php

require_once"./sqlinit.php";
require_once"./libs/debugManager.php";

use Medoo\Medoo;

class dish_list{
    private $db;
    private $allData;
    private $availableData;

    function __construct(){
        $sql=new sqlinit();
        $this->db=$sql->getDatabase();
    }

    function getAllData(){
        $this->allData=$this->db->select("dish","*");
        return $this->allData;
    }

    function getAvailableData(){
        $this->allData=$this->db->select("dish","*");
        for($i=0;$i<count($this->allData);$i++){
            $this->availableData[$i]["restaurantID"]=$this->allData[$i]["restaurantID"];
            $this->availableData[$i]["dishTitle"]=$this->allData[$i]["dishTitle"];
            $this->availableData[$i]["dishavailable"]=$this->allData[$i]["dishavailable"];
            $this->availableData[$i]["showPictureFileName"]=$this->allData[$i]["showPictureFileName"];
        }
        return $this->availableData;
    }

    function selectByID($id){
        return $data=$this->db->select("dish","*",["id"=>$id]);
    }

    function selectByRestaurantID($restaurantID){
        return $data=$this->db->select("dish","*",["restaurantID"=>$restaurantID]);
    }

    function selectByDishTitle($dishTitle){
        return $data=$this->db->select("dish","*",["dishTitle"=>$dishTitle]);
    }

    function select_Others($columns, $where){
        return $data=$this->db->select("dish",$columns,$where);
    }

    function insert($data){
        $lastUserID=$this->db->insert("dish","$data");
        return $lastUserID;
    }

    function deleteByID( $id ){
        return $this->db->delete("dish",["id"=>$id]);
    }

    function deleteByDishTitle($dishTitle){
        return $this->db->delete("dish",["dishTitle"=>$dishTitle]);
    }

    function deleteByRestaurantID($restaurantID){
        return $this->db->delete("dish",["restaurantID"=>$restaurantID]);
    }

    function update($data,$where){
        return $this->db->update("dish","$data","$where");
    }

}

?>
