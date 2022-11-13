<?php
//settings for errors
error_reporting(E_USER_ERROR);
ini_set('display_errors', '1');

include 'dbconn.php';
//loaded from dbconn.php
$conn;

if (isset ($_POST['incomingData'])){
    $formArray = $_POST['incomingData'];
    $sqlImplode = implode(",", $formArray);

    $sql = 
    "INSERT INTO bloodpressure (dia , sys, bpm, dateonly)
    VALUES ($sqlImplode, CURDATE());";


    
    
    // if condition runs the query
    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } else {
        echo "New record created with data: ";
        echo "Sys: " . $formArray["sysValue"] . ", ";
        echo "Dia: " . $formArray["diaValue"] . ", ";
        echo "Pulse: " . $formArray["pulseValue"];
    }
    

    
    
}




$conn->close();
?>