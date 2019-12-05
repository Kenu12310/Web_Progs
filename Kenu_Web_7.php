<html>
<head>
	<meta http-equiv="refresh" content="1"/>
	<meta charset="UTF-8"/>
	<style>
		p 
		{
			color:white;
			font-size:90px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}
		body
		{
			background-color: grey;
		}
	</style>
</head>
<body>
	<h1>Display Current Date n Time</h1>
	<h2>
		<?php
			echo "The Time from Server is : <span style='color:tomato';>".date("h : i : s a")."</span>";
			echo "<br>";
			echo "Todays Date is <span style='color:tomato';>".date("d-m-y");
			date_default_timezone_set('America/New_York');
			echo "</span> & Current Time is <span style='color:red';>".date("h : i : s a")."</span>";
		?>
	</h2>
</body>
</html>