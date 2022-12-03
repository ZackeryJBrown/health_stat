<?php
    include("config.php");

    $servername = "localhost";
    $username = "root";
    //enter password and database name
    $password = $passw;
    $dbname = $dbn;
    $conn = "";
    $charset = "utf8mb4";
    
    
    $options = [
        \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $dsn = "mysql:host=$servername;dbname=$dbname;charset=$charset";
    try {
         $pdo = new \PDO($dsn, $username, $password, $options);
    } catch (\PDOException $e) {
         throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

    //mysqli no longer supported
    /*try{
        if ($username =="" || $password ==""){
            throw new Exception ('Action successful, however this demo does not include the connection to the development database. Functionality can be demonstrated in person, or you may review the source code for this site at https://github.com/ZackeryJBrown.');
        } else {
            $conn = new mysqli($servername, $username, $password, $dbname);
        }
    }
    catch(Exception $ex) {
        echo 'Error: '.$ex->getMessage();
    }*/

?>