<?php
//settings for errors
error_reporting(E_USER_ERROR);
ini_set('display_errors', '1');

include 'dbconn.php';
//loaded from dbconn.php
$pdo;

if (isset ($_POST['incomingData'])){
    $formArray = $_POST['incomingData'];
    $sqlImplode = implode(",", $formArray);

    //PDO updates
    $sql = $pdo->prepare("INSERT INTO bloodpressure (dia , sys, bpm, dateonly) VALUES ($sqlImplode, CURDATE());");
    $sql->execute();
    //$fetch = $sql->fetch();


    if ($sql->rowCount() === 0) {
        echo "Error";
    } else {
        echo "SQL returns: " . $sql->rowCount();
        echo "New record created with data: ";
        echo "Sys: " . $formArray["sysValue"] . ", ";
        echo "Dia: " . $formArray["diaValue"] . ", ";
        echo "Pulse: " . $formArray["pulseValue"];
    }
};

$dbh=NULL;
?>