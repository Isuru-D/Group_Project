<?php

    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $db="project";

    $connection = new mysqli ($dbhost,$dbuser,$dbpass,$db);

    if($connection->connect_error){
        echo "connection failed";
    }
?>