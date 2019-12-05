<html>
<body>
<style>
	table, td, th
	{
		border: 1px solid black;
		width: 33%;
		text-align: center;
		border-collapse:collapse;
		background-color:lightblue;
	}
	table 
	{
		margin: auto; 
	}
</style>
<?php

	$a=[];

	$conn = mysqli_connect("localhost", "root", "", "weblab");
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
	}
	$sql = "SELECT * FROM student";
	$result = mysqli_query($conn, $sql);

	echo "<br>";
	echo "BEFORE SORTING";
	echo "<table border='2'>";
	echo "<tr>";
	echo "<th>USN</th><th>NAME</th><th>Address</th>";
	echo "</tr>";

	if (mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>". $row["usn"]."</td>";
			echo "<td>". $row["name"]."</td>";
			echo "<td>". $row["addr"]."</td></tr>";
			array_push($a,$row["usn"]);
		}
	}
	else
		echo "Table is Empty";
	echo "</table>";

	$n=count($a);
	$b=$a;
	for ( $i = 0 ; $i< ($n - 1) ; $i++ )
	{
		$pos= $i;
		for ( $j = $i + 1 ; $j < $n ; $j++ ) 
		{
			if ( $a[$pos] > $a[$j] )
				$pos= $j;
		}
		if ( $pos!= $i ) 
		{
			$temp=$a[$i];
			$a[$i] = $a[$pos];
			$a[$pos] = $temp;
		}
	}

	$c=[];
	$d=[];
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			for($i=0;$i<$n;$i++) 
			{
				if($row["usn"]== $a[$i])
				{
					$c[$i]=$row["name"];
					$d[$i]=$row["addr"];
				}
			}
		}
	}

	echo "<br>";
	echo "AFTER SORTING";
	echo "<table border='2'>";
	echo "<tr>";
	echo "<th>USN</th><th>NAME</th><th>Address</th></tr>";
	for($i=0;$i<$n;$i++) 
	{
		echo "<tr>";
		echo "<td>". $a[$i]."</td>";
		echo "<td>". $c[$i]."</td>";
		echo "<td>". $d[$i]."</td></tr>";
	}
	echo "</table>";
?>
</body>
</html>