<?php
	if($_GET["n1"]>$_GET["n2"] && $_GET["n1"]>$_GET["n3"])
	{
		echo"1st number is greater.";
	}
	if($_GET["n2"]>$_GET["n3"] && $_GET["n2"]>$_GET["n1"])
	{	
		echo"2nd number is greater.";
	
	}
	if($_GET["n3"]>$_GET["n1"] && $_GET["n3"]>$_GET["n2"])
	{
		echo"3rd number is greater.";
	}
?>