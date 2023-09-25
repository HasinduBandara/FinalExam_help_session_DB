<?php
	
	echo "welcome " . $_GET["fname"] ; //html page eke fname kyna eka read krnw
	//out put eka enne welcome ______ fname eka
	echo "your address is " . $_GET["address"] ; //html page eke address kyna eka read krnw
	//out put eka enne your address is ______ fname eka

?>

<body>
<!--pages dekaka nthuwa ekama page eke php eke kali input krgnnwa-->
<form method  = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<label> name </label>
<input type = "text" name = "fname" ><br><br>

<label> address </label>
<input type = "text" name = "address" ><br><br>

<input type = "submit" name = "btnsubmit" value = "SUBMIT" ><br><br>
</form>

<?php

	if(isset($_POST["btnsubmit"]))
	{
		echo "name : " . $_POST["fname"];
		echo "addrerss : " . $_POST["address"];
	}

?>

</body>