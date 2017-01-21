<?php 
	require_once (__DIR__.'/inc/important_header_file.php');
	require_once "inc/header.php";
?>
   
   
   
   
   
   <!-- start of about us -->
   
   <div class="about-us-area section-padding">
   	<div class="container">
   		<div class="row">
   			<div class="col-md-8 col-md-offset-2">
				<div class="about-text">
				
					<h4>About Us</h4>

<?php 
$tbName = "aboutus";
$selectArr = array(
  //'select' => array('id','task','time'),
  //'where' => array('id'=>1,'task'=>'task one'),
  'order_by' => 'id DESC',
  'limit' => array('0','1'),
  'return_type' => 'one'
);
$selectAll = $db->selection($tbName,$selectArr);

if($selectAll){
	echo $selectAll['about_text'];
}else{
	echo "no about us text.";
}

?>

					
				</div>
   			</div>
   		</div>
   	</div>
   </div>
   
   <!-- end of about us -->
   
   
<?php 

  require_once "inc/footer.php";

?>