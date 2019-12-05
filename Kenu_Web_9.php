<?php
	$states = "Mississippi Alabama Texas Massachusetts Kansas";
	$statesArray = [];
	$states1 = explode(' ',$states);
	foreach($states1 as $state) 
	{
		if(preg_match( '/xas$/', ($state)))
			$statesArray[0] = ($state);
	}
	foreach($states1 as $state) 
	{
		if(preg_match( '/Kansas$/', ($state)))
			$statesArray[1] = ($state);
	}
	foreach($states1 as $state) 
	{
		if(preg_match( '/Massachusetts$/', ($state)))
			$statesArray[2] = ($state);
	}
	foreach($states1 as $state) 
	{
		if(preg_match( '/Alabama$/', ($state)))
			$statesArray[3] = ($state);
	}
	foreach ( $statesArray as $element => $value )
	{
		print( $value." is the element ". $element."<br/>");
	}
?>