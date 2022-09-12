<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
		
	include 'dbconn.php';
	$conn;
	
	$returnArray;

	if (isset ($_POST['datesPosted'])){
		$formArray = $_POST['datesPosted'];
		
	
	//selecting data based on daterange
	$sql = "SELECT dia, sys, bpm, dateonly FROM bloodpressure
			WHERE dateonly BETWEEN '$formArray[startdate]' AND '$formArray[enddate]';";


	$results = $conn->query($sql);
	if ($results === FALSE) {
		echo "Error: " . "<br>" . $conn->error;

	} else if (mysqli_num_rows($results) == 0){
		echo "Error: No results returned from query.";

	} else {
		while ($row = mysqli_fetch_assoc($results)){
			$dia = $row["dia"];
			$sys = $row["sys"];
			$bpm = $row["bpm"];
			$dateonly = $row["dateonly"];

			//this appends each new array creating multidimentional array
			$returnArray[] = array("sys"=>$sys,"dia"=>$dia,"bpm"=>$bpm,"dateonly"=>$dateonly);

		}
		$returnArray = json_encode($returnArray);
		echo $returnArray;
	}
	}
	
	$conn->close();
	exit;
?>