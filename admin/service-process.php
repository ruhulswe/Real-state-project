<?php  

	require_once (__DIR__.'/inc/important_header_file.php');

    if(!(session::getter("admin"))){
        header("Location:login.php");
        exit();
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    	extract($_POST);
    	//echo $project_description;
    	//echo $catagory;
    	if(!empty($service_description) && !empty($service_cat)){    
			$tbName = "services";
			$cond = array(
			  "service_description" => $service_description,
			  "service_cat" => $service_cat
			);
			$isInserted = $db->insertion($tbName,$cond);
			if($isInserted){
            	session::setter('service_success',"service added.");	
            	header("Location:create-service.php");
			}else{
            	session::setter('service_error',"service not added.");	
            	header("Location:create-service.php");	
			}
    	}else{
    		session::setter('service_error','one or more input field is empty.');
    		header("Location:create-service.php");	
    	}
    }


?>