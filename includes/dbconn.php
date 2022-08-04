<?php
    $servername = "localhost";
    $username = "root";
    //enter password and database name
    $password = "";
    $dbname = "";
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("connection failed: " . $conn->connect_error);
    }
?>