<!DOCTYPE html>
<html>


<!--below is the mobile display scaling and edge compatibility-->
<meta charset="UTF-8"
	name="viewport" content="width=device-width, initial-scale=1.0"
	http-equiv="X-UA-Compatible" content="ie=edge">

<head>
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/hearticon180.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/hearticon32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/hearticon16.png">
	<link rel="manifest" href="favicon/site.webmanifest">

	<link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="styles/styles.css">
	<script src="includes/jquery.min.js"></script>
</head>

<header class="navcontainer">

		<img src='favicon/hearticon64.png'>
            
		<h1 class="logo">Health Stat</h1>
        
        <nav class="navcontainer">
            <ul>
				<li><a href="index.php">Home</a></li>
                <li><a href="graphs.php">Review History</a></li>
			</ul>
        </nav>
</header>


<title>
	Health Stat
</title>

<body>
	<br>
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
			<input type="submit" id="submitbutton" value="Submit" class="clickables" /input>
			</form>
		</div>
			


	</div>

	<br>


</body>


<script src="healthstat.js"></script>



</html>
