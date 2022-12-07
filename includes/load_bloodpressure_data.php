<?php
	error_reporting(E_USER_ERROR);
	ini_set('display_errors', '1');
		
	include 'dbconn.php';
	$pdo;
	
	$returnArray;

	if (isset ($_POST['datesPosted'])){
		$formArray = $_POST['datesPosted'];
		
	

	$sql = $pdo->prepare("SELECT dia, sys, bpm, dateonly FROM bloodpressure WHERE dateonly BETWEEN '$formArray[startdate]' AND '$formArray[enddate]';");
	$sql->execute();
	//selecting data based on daterange

	//$results = $conn->query($sql);
	if ($sql->rowCount() === 0) {
		echo "Error";

	} else {
		while ($row = $sql->fetch(PDO::FETCH_ASSOC)){
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
	
	$dbh=NULL;
?>