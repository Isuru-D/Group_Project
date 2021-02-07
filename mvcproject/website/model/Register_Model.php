<?php
    class Register_Model extends Model{
        function __construct(){
            parent::__construct(); 
        }

        function registerDealer($name,$username,$email,$address,$tp,$pass){
           return $this->db->insert('pending_dealers', array('UserName'=>$username, 'Name'=>$name, 'Address'=>$address, 'Telephone'=>$tp, 'Password'=>$pass, 'Email'=>$email));       
        }

        function namecheck(){
            return $this->db->SelectAll('users','u_name');
        }
    }
?>