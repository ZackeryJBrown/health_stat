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

<header class="navcontainer">
        
            <h1 class="logo">NavLogo</h1>
        
        <nav class="container">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="graphs.php">Review History</a></li>
                
           
			
			</ul>
        </nav>
</header>


<title>Health Review</title>

<body>


	<h1>Bloodpressure History</h1>
	<p>Select starting and ending dates:</p>
	<br>
	<form>
		<input id="start_date" class="form-controll" type="date" placeholder="Start Date">
		<input id="end_date" class="form-controll" type="date" placeholder="End Date">
	</form>



	<button class="clickables" id="load_results">Load Results</button>
	<button class="clickables" id="graphbutton">Show Graph</button>

	<div id="table_div" class="hidden">
	<table id=results_table>
  		<tr>
    		<th>Systolic</th>
    		<th>Diastolic</th>
    		<th>Heartrate (BPM)</th>
  		</tr>
	</table>
	</div>


	<!--barchart start-->
	<div id="chartSVG">
		
	</div>


</body>

<script src="graphs.js"></script>

</html>
