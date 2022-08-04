<!DOCTYPE html>
<html>


<meta 
	name="viewport" content="width=device-width, initial-scale=1.0"
	charset="UTF-8"	
>

<head>
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">

	<link rel="stylesheet" href="styles/styles.css">
	<script src="includes/jquery.min.js"></script>
</head>


<title>
	Health Stat
</title>

<body>
	<div id="formcontainer" class="center, opacity">
	<p>Blood Pressure Logging</p>
		<br>
		<div class="center, opacity">
			<form  accept-charset=utf-8 action=# method="POST" id="bloodpressureform">
			<input type="number" id="sysfield" placeholder="SYS" /input>
			<br>
			<input type="number" id="diafield" placeholder="DIA" /input>
			<br>
			<input type="number" id="pulsefield" placeholder="Pulse per Min" /input>
			<br>
			<input type="submit" id="submitbutton" value="Submit" /input>

			<br>
			<br>

			<!--add an image to src to make it a clickable image-->
			<button src='' onClick="location.href='graphs.php'" type="button">Review History</button>
			<br>
			<!--make a page with some weird avant-garde stuff that's fun to play with-->
			<button onClick="location.href=''" type="button">De-stress</button>
			</form>
		</div>
			


	</div>

	<br>


</body>


<script src="healthstat.js"></script>



</html>
