<?php
    class Dealer_Model extends Model{
        function __construct(){
            parent::__construct(); 
        }

        function getMomali(){
            return $this->db->selectWhere('item', array('ItemID','ItemName','Price', 'Image'), "Category='Momali'"); 
        }

        function cartItem($data){
            $this->db->updateCart('cart',array('amount' => $data['amount']),"ID = '{$data['ID']}'");
        }
    }
?>