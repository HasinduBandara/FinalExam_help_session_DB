<?php
	
	
	//$file = fopen("test.txt","r"); 
	rename("test.txt","renamed.txt");//file eka rename krnwa
	
	 $myfile = fopen("renamed.txt" , "r") or die("error!");
	 //echo fread($myfile , filesize("rename.txt"));//okkoma tika print krnwa
	 while(!feof($myfile))
	 {
		  echo fgets($myfile , filesize("renamed.txt"));//line ekak wihrk print krnwa
	 //getc kyl dmmoth letters by letter print krnwa
	 }
	
	 fclose($myfile);
	 


?>