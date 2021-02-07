<?php
    class Admin_Model extends Model{
        function __construct(){
            parent::__construct(); 
        }

        function getDealer(){
            return $this->db->selectAll('dealers','*'); 
        }

        function searchID($id){
            return $this->db->selectWhere('dealers','*', "u_id='$id'"); 
        }

        function updateDealer($data){
            return $this->db->update('dealers',array('f_name' => $data['f_name'],'address' => $data['address'],'email' => $data['email'],'contact' => $data['contact']),"u_id = '{$data['id']}'");
        }

        function deleteDealer($id){
            return $this->db->delete('dealers',"u_id='$id'"); 
        }
    }
?>