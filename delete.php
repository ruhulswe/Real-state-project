<?php 


	$file = $_POST['imgsrc'];
/*	echo $file." deleted";
	exit();*/
	if (!unlink($file)){
	  echo ("Error deleting $file");
	}else{
	  echo ("Deleted $file");
	}




?>