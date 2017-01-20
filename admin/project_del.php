<?php 

	require_once (__DIR__.'/inc/important_header_file.php');
	
	extract($_GET);
	
	if(!empty($id) && !empty($imgsrc)){
		$file = "../img/project/".$imgsrc;
		if(unlink($file)){
			$tbName = "projects";
			$cond = array('id'=>$id);
			$deleted = $db->delete($tbName,$cond);
			if($deleted){
				session::setter('project_deleted',"project deleted.");
				header("Location:$type.php");
			}else{
				session::setter('project_deleted',"file deleted but not from database.");
				header("Location:$type.php");	
			}
		}else{
			session::setter('project_deleted',"project not deleted.");
			header("Location:$type.php");
		}
	}