<?php
	
	require 'config.php' //database eka create krla thyna nama
	
	$sql = "select id , name from student " ;
	
	$result = $con-> query($sql);
	
	if($result->num_rows> 0 )
	{
		
	}
	else
	{
		
	}
	


?>