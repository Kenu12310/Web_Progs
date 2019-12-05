<html>
<head>
<style>
	table, td, th
	{
		border: 1px solid black;
		width: 35%;
		text-align: center;
		background-color: DarkGray;
	}
	table 
	{
		margin: auto; 
	}
	input,p 
	{
		text-align:right;
	}
</style>
</head>
<body>
<form method="post">
<table>
	<h2> SIMPLE CALCULATOR </h2>
	<tr><td>First Number:</td><td><input type="text" name="num1" /></td>
	<td rowspan="2"><input type="submit" name="submit" value="calculate"></td></tr>
	<tr><td>Second Number:</td><td><input type="text" name="num2"/></td></tr>
	</form>
	<?php
		if(isset($_POST['submit'])) 
		{
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			if(is_numeric($num1) and is_numeric($num1) )
			{
				echo "<tr><td> Addition :</td><td><p>".($num1+$num2)."</p></td>";
				echo "<tr><td> Subtraction :</td><td><p> ".($num1-$num2)."</p></td>";
				echo "<tr><td> Multiplication :</td><td><p>".($num1*$num2)."</p></td>";
				echo "<tr><td>Division :</td><td><p> ".($num1/$num2)."</p></td>";
				echo "</table>";
			}
			else
			{
				echo"<script type='text/javascript' > alert(' ENTER VALID NUMBER');</script>";
			}
		}
	?>
</body>
</html>

<?php
	$a = array(array(1,2,3),array(4,5,6),array(7,8,9));
	$b = array(array(7,8,9),array(4,5,6),array(1,2,3));
	$m=count($a);
	$n=count($a[2]);
	$p=count($b);
	$q=count($b[2]);
	echo "the first matrix :"."<br/>";
	for ($row = 0; $row < $m; $row++) 
	{
		for ($col = 0; $col < $n; $col++)
			echo " ".$a[$row][$col];
		echo "<br/>";
	}
	echo "the second matrix :"."<br/>";
	for ($row = 0; $row < $p; $row++) 
	{
		for ($col = 0; $col < $q; $col++)
			echo " ".$b[$row][$col];
		echo "<br/>";
	}
	echo "the Transpose for the first matrix is : ";
	echo "<br/>";
	for ($row = 0; $row < $m; $row++)
	{
		for ($col = 0; $col < $n; $col++)
			echo " ".$a[$col][$row];
		echo "<br/>";
	}
	if(($m===$p) and ($n===$q))
	{
		echo "the Addition of matrices is:"."<br/>";
		for ($row = 0; $row < 3; $row++)
		{
			for ($col = 0; $col < 3; $col++)
				echo " ".$a[$row][$col]+$b[$row][$col]." ";
			echo "<br/>";
		}
	}
	if($n===$p)
	{
		echo " The Multiplication of matrices: ";
		echo "<br/>";
		$result=array();
		for ($i=0; $i < $m; $i++) 
		{
			for($j=0; $j < $q; $j++)
			{
				$result[$i][$j] = 0;
				for($k=0; $k < $n; $k++)
					$result[$i][$j] += $a[$i][$k] * $b[$k][$j];
			}
		}
		for ($row = 0; $row < $m; $row++) 
		{
			for ($col = 0; $col < $q; $col++)
				echo " ".$result[$row][$col];
			echo "<br/>";
		}
	}
?>
