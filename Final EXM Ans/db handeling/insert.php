<?php	
	require 'connecting database.php';
?>

<html>
<body>
  


<form method = "post" action="<?php echo htmlspecialchars($_server['PHP_SELF']);?>">

	name : <input type = "text" name "txtname" > <br> <br>
	ID : <input type = "text" name = "stid"> <br><br>
	
	<input type = "submit" name ="btnsubmit" value ="submit">
	</form>
	
	<?php 
	if(isset($_post["btnsubmit"]))
	{
		$name = $_post['txtname'];
		$id = $_post['stid'];
		
		//insetin query
		$sql = "insert into student( id , name ) values ($id , $name)";
		
		if($con-> query($sql))
		{
			echo "<script> alert('inserted succesfuly')</script>" ;
		}
		else
		{
			echo "error inserting" .$con->error ;
		}
		
		$con-> close();
	}
	
	
	
	
	

?>
</body>
</html>