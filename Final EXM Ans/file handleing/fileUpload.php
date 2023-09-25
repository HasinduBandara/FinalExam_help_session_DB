<html>
	<head> <title> File upload example</title>
	</head>
	<body>
		 <form method = "post" action = "fileUpload.php" enctype = "mccultipart/form-data">
			
			Select File To Upload :
			<input type= "file" name= "filefielddName" id = "fileToUpload"> <br>
			<input type= "submit" name= "btnsubmit" value = "uplaod">
			
			
			</form> 
			
			
			<?php
				
				if(isset($_POST["btnsubmit"]))
				
				$target_dir = "uploads/" ;
				$target_file = $target_dir.basename($_FILES["filefielddName"]["name"]);
				if(isset($_FILES["filefielddName"]))
				{
					if(move_uploaded_file($_FILES["filefielddName"]["temp_name"] , $target_FILE))
					{
						echo "the file " .basename($_FILES["filefielddName"]["name"]) . " is uploaded" ;
					}
					else
					{
						echo " error while uploading the file";
					}
				}
				else
				{
						echo "file is not available" ;
				}
			
				
			?>
			
	</body>
</html>