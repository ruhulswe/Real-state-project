<?php 

  	require_once (__DIR__.'/inc/important_header_file.php');

	extract($_GET);
	if(!empty($_GET['id'])){
        $tbName = "gallery";
        $selectArr = array(
          'where' => array('id'=>$id),
          'return_type' => 'one'
        );
        $selectAll = $db->selection($tbName,$selectArr);
        if($selectAll){
        	//echo $selectAll['galleryimg'];exit();
        	$file = "../img/gallery/".$selectAll['galleryimg'];
        	if(unlink($file)){
				$tbName = "gallery";
				$cond = array('id'=>$id);
				$deleted = $db->delete($tbName,$cond);
				if($deleted){
					session::setter("gallery_deleted","image deleted");
					header("Location:gallery.php");
				}else{
					echo "not deleted from database.";
				}
        	}else{
        		echo "file not deleted";
        	}
        }else{
        	echo "not found.";
        }		
	}
	//$file = $_POST['imgsrc'];
/*	echo $file." deleted";
	exit();*/
/*	if (!unlink($file)){
	  echo ("Error deleting $file");
	}else{
	  echo ("Deleted $file");
	}*/




?>