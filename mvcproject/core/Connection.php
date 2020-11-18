<?php
    class Connection{
        public function getConnection(){
            $conn=new mysqli('localhost', 'root', '', 'project', 3308);
            if($conn->connect_error){
                die("Connecction failed: ".$conn->connect_error);
            }
            return $conn;
        }
    }
?>