<?php  

	require_once (__DIR__.'/inc/important_header_file.php');

    if(!(session::getter("admin"))){
        header("Location:login.php");
        exit();
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    	extract($_POST);
    	$projects_img = $_FILES['project_img']['name'];
    	$projects_tmp_img = $_FILES['project_img']['tmp_name'];
    	if(!empty($project_description) && !empty($project_cat)){
            $file_ext       =  explode('.', $projects_img);
            
            $allowed        =  array('jpg','png');
            $file_ext       =  strtolower(end($file_ext));
            
            if(in_array($file_ext, $allowed)){
            	
                $file_new_name     = uniqid('nur',true).'.'.$projects_img;
                $file_destination  = '../img/project/'.$file_new_name;
                 if(move_uploaded_file($projects_tmp_img, $file_destination)){
                 	echo "file uploaded.";
					$tbName = "projects";
					$cond = array(
					  "projects_description" => $project_description,
					  "project_img" => $file_new_name,
					  "project_cat" => $project_cat
					);
					$isInserted = $db->insertion($tbName,$cond);
					if($isInserted){
		            	session::setter('project_success',"project added.");	
		            	header("Location:create-project.php");
					}else{
		            	session::setter('project_error',"project not added.");	
		            	header("Location:create-project.php");	
					}
                 }else{
		            	session::setter('project_error',"file not uploaded.");	
		            	header("Location:create-project.php");	
                 }
            }else{
            	echo "$file_ext is not allowed.";
            	session::setter('project_error',"$file_ext is not allowed.");
            }
    	}else{
    		session::setter('project_error','one or more input field is empty.');
    		header("Location:create-project.php");	
    	}
    }