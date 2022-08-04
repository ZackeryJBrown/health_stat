<?php

	error_reporting(E_ALL);
	ini_set('display_errors', '1');
		
	include 'includes/dbconn.php';
	$conn;
		
	$sql = "SELECT * FROM bloodpressure;";
	$results = $conn->query($sql);
	if ($results === FALSE) {
		echo "Error: " . $sql . "<br>" . $conn->error;

	} else if (mysqli_num_rows($results) == 0){
		echo "Error: No results returned from query.";

	} else {
		while ($row = mysqli_fetch_assoc($results)){
			echo $row['dia'] . "<br>";
		}
	}
?>