<?php


	$fileHandler = fopen("myFile.txt"  , "a") or die("error");
		fwrite($fileHandler , "\n this will append" );
		fclose($fileHandler);
		
?>