<?php  

	require_once (__DIR__.'/inc/important_header_file.php');

    if(!(session::getter("admin"))){
        header("Location:login.php");
        exit();
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    	extract($_POST);
    	if(!empty($feature_description) && !empty($feature_cat)){    
			$tbName = "features";
			$cond = array(
			  "feature_description" => $feature_description,
			  "feature_cat" => $feature_cat
			);
			$isInserted = $db->insertion($tbName,$cond);
			if($isInserted){
            	session::setter('feature_success',"feature added.");	
            	header("Location:create-feature.php");
			}else{
            	session::setter('feature_error',"feature not added.");	
            	header("Location:create-feature.php");	
			}
    	}else{
    		session::setter('feature_error','one or more input field is empty.');
    		header("Location:create-feature.php");	
    	}
    }