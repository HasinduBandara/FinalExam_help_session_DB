<?php

$con = new mysqli("localhost" , "root" , "" ,"test");

if($con -> connect_error)
{
	die("connectio failed" . $con-> connect_error);
}
else
{
	echo "<script> alert( 'connected succesfully') </script>";
}

?>