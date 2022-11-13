<?php
    $servername = "localhost";
    $username = "root";
    //enter password and database name
    $password = "";
    $dbname = "";
    $conn = "";
    try{
        if ($username =="" || $password ==""){
            throw new Exception ('Action successful, however this demo does not include the connection to the development database. Functionality can be demonstrated in person, or you may review the source code for this site at https://github.com/ZackeryJBrown.');
        } else {
            $conn = new mysqli($servername, $username, $password, $dbname);
        }
    }
    catch(Exception $ex) {
        echo 'Error: '.$ex->getMessage();
    }
?>