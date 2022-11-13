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
	<script src="includes/d3.min.js"></script>
</head>

<header class="navcontainer">

		<img class="logo" src="favicon/hearticon64_white.webp">
            
		<h2 class="logo">Health Stat</h2>
        
        <nav class="navcontainer">
            <ul>
				<li><a href="index.php">Home</a></li>
                <li><a href="graphs.php">Review History</a></li>
			</ul>
        </nav>
</header>


<title>Health Review</title>

<body>

	<div class="resultscontainer">
		<div class="bodycontainer, opacity">
			<h1>Bloodpressure History</h1>
			<p>Select starting and ending dates:</p>
			<br>
			<form>
				<input id="start_date" class="form-controll" type="date" placeholder="Start Date">
				<input id="end_date" class="form-controll" type="date" placeholder="End Date">
			</form>



			<button class="clickables" id="load_results">Load Results</button>
		</div>
	

		<div id="table_div" class="hidden, bodycontainer">
			<table id=results_table>
				
			</table>
		</div>
	</div>

</body>

<script src="graphs.js"></script>

</html>

