<?php

class Product{
    public $db=null;
    public function __construct(DBcontroller $db)
    {
        if(!isset($db->con))return null;
        $this->db=$db;
    }

    public function getData($table='product'){
        $result=$this->db->con->query(query:"SELECT * FROM {$table}");
        $resultArr=array();

        while($item=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArr[]=$item;
        }
        return $resultArr;
    }

    public function getProduct($item_id=null,$table='product'){
        if(isset($item_id)){
            $result=$this->db->con->query("SELECT * FROM ($table) WHERE item_id={$item_id}");
            $resultArr=array();

        while($item=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArr[]=$item;
        }
        return $resultArr;
        }
    }
}