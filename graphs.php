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
	<script src="includes/d3.min.js"></script>
</head>

<title>Health Review</title>

<body>


	<h1>Bloodpressure History</h1>
	<p>Select starting and ending dates:</p>
	<br>
	<form>
		<input id="start_date" class="form-controll" type="date" placeholder="Start Date">
		<input id="end_date" class="form-controll" type="date" placeholder="End Date">
	</form>

	

	<button>Load Results</button>
	<div id="graphdiv" class="center, opacity">
	
	</div>


</body>

<script src="includes/graphs.js"></script>

</html>
