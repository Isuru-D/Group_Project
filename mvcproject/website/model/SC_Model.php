<?php
    class SC_Model extends Model{
        function __construct(){
            parent::__construct(); 
        }

        function getPrice($category){
            return $this->db->selectWhere('item', array('ItemID','ItemName','Price'), $category); 
        }

        function searchID($array,$id){
            return $this->db->selectWhere('item', $array, "ItemID='$id'"); 
        }

        function updatePrice($data){
            return $this->db->update('item',array('Price' => $data['Price']),"ItemID = '{$data['ItemID']}'");
        }

        function getStock($category){
            return $this->db->selectWhere('item', array('ItemID','ItemName','Quantity'), $category); 
        }
    }
?>