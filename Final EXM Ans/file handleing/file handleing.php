<?php

	$fileHandler = fopen("myFile.txt"  , "w" ) or die("error");
	fwrite($fileHandler , "hello world" );
	fclose($fileHandler);
	


?>