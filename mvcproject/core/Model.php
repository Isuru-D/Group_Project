<?php
    require_once('Connection.php');

    class Model{
        function __construct(){
            $db=new Connection();
            $this->connection=$db->getConnection();
        }
    }
?>
