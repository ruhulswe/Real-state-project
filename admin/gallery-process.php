<?php  

	require_once (__DIR__.'/inc/important_header_file.php');

    if(!(session::getter("admin"))){
        header("Location:login.php");
        exit();
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

    	$galleryimg = $_FILES['galleryimg']['name'];
    	$galleryimgtmp_img = $_FILES['galleryimg']['tmp_name'];
    	if(!empty($galleryimg)){

            $file_ext       =  explode('.', $galleryimg);
            $allowed        =  array('jpg','jpeg','png');
            $file_ext       =  strtolower(end($file_ext));
            
            if(in_array($file_ext, $allowed)){
            	
                $file_new_name     = uniqid('nur',true).'.'.$galleryimg;
                $file_destination  = '../img/gallery/'.$file_new_name;

                 if(move_uploaded_file($galleryimgtmp_img, $file_destination)){

					$tbName = "gallery";
					$cond = array(
					  "galleryimg" => $file_new_name,
					);
					$isInserted = $db->insertion($tbName,$cond);
					if($isInserted){
		            	session::setter('gallery_success',"image uploaded.");	
		            	header("Location:gallery.php");
					}else{
		            	session::setter('gallery_error',"image not uploaded.");	
		            	header("Location:gallery.php");	
					}
                 }else{
		            	session::setter('gallery_error',"image not uploaded.");	
		            	header("Location:gallery.php");	
                 }
            }else{
            	echo "$file_ext is not allowed.";
            	session::setter('gallery_error',"$file_ext is not allowed.");
            }
    	}else{
            echo "<script>alert('$galleryimg')</script>";
    		session::setter('gallery_error','one or more input field is empty.');
    		header("Location:gallery.php");	
    	}
    }


?>