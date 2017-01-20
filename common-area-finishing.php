<?php 
	require_once (__DIR__.'/inc/important_header_file.php');
	require_once "inc/header.php";
?>
   
   
   <!-- start of mission-vission -->
   
   <div class="typical-apartment-area">
   	<div class="container">
   		<div class="row">
   			<div class="col-md-12">
				<div class="typical-apartment-img">
					
					<img src="img/common-feature.jpg" alt="typical-feature">
					
				</div>
				<div class="typical-apartment-text col-md-8 col-md-offset-2">
			
                    <?php 
                        $tbName = "features";
                        $selectArr = array(
                          'where' => array('feature_cat'=>'common'),
                          'return_type' => 'all'
                        );
                        $selectAll = $db->selection($tbName,$selectArr);
                        if($selectAll){
                            foreach ($selectAll as $value) {
                    ?>

							<div class="typical-para">
								<?php echo $value['feature_description']; ?>
							</div>

					<?php } }else{ echo "no more structural feature."; } ?>
					
				</div>
   			</div>
   		</div>
   	</div>
   </div>
   
   <!-- end of about us -->
   
   
   
<?php 

  require_once "inc/footer.php";

?>
