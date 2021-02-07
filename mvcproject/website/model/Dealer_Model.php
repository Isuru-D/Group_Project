<?php
    class Dealer_Model extends Model{
        function __construct(){
            parent::__construct(); 
        }

        function getItems($category){
            return $this->db->selectWhere('item', array('ItemID','ItemName','Price', 'Image'), $category); 
        }

        function cartItem($data){
            $this->db->updateCart('cart',array('amount' => $data['amount']),"ID = '{$data['ID']}'");
        }

        function getCart(){
            return $this->db->selectWhere('cart','*',"amount>0");
        }

        function getDetails($id){
            return $this->db->selectWhere('item',array('ItemName','Price', 'Image'),"ItemID='$id'");
        }

        function namecheck(){
            return $this->db->SelectAll('users','u_name');
        }

    }
?>