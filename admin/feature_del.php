<?php 

	require_once (__DIR__.'/inc/important_header_file.php');
	
	extract($_GET);
	
	if(!empty($id) && !empty($type)){

			$tbName = "features";
			$cond = array('id'=>$id);
			$deleted = $db->delete($tbName,$cond);
			if($deleted){
				session::setter('feature_deleted',"feature deleted.");
				header("Location:$type.php");
			}else{
				session::setter('feature_deleted',"file deleted but not from database.");
				header("Location:$type.php");	
			}
	}