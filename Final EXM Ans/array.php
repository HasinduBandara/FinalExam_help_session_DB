<?php
	$color = array("red" , "green" , "blue" , "yellow");
	 foreach($color as $value)
	 {
		 echo $value . "<br>" ;
	 }
	 
	 //asociation arrays
	 
	 $marks = array("iwt"=>45 , "spm"=> 67 , "ooc"=>98);
	 foreach($marks as $subject => $lakunu)
	 {
		 echo $subject . "     " . $lakunu . "<br>" ;
	 }
	//echp $marks["ooc"]; adala eke marks withrk display krnna

?>