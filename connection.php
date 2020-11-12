<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "brandlink";

    $conn = mysqli_connect($servername, $username, $password, $dbname, '3308');

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
