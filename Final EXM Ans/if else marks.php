<?php

	$marks = 70 ;
	$a = "your mark is : " ;

	if($marks >= 75 )
	{
		echo "$a A" ;
	}
	else if($marks < 75 && $marks >= 65)
	{
		echo "$a". "B"  ; //answer remain the same
	}
	else if($marks < 65 && $marks >= 55)
	{
		echo "$a B-" ;
	}

	else if($marks < 55 && $marks >= 45)
	{
		echo "$a C" ;
	}
	else{
		echo "modaya!" ;
	}
	
	


?>