<?php

	$fname = $_GET["fname"];
	echo "welcome " .$_GET["fname"];
	echo "<br>";
	echo "welcome " .$fname;
	
	echo "<br>";
	$address = $_GET["address"];
	echo "you are from " .$address;
	
	echo "<br>";
	$gender = $_GET["gender"];
	echo "Gender " .$gender;
	
	
	echo "<br>";
	echo "subjects : <br>";
	
	
	foreach($_GET["checklist"] as $val) 
	{
		echo $val . "<br>";
	}
	

?>