<?php 
     require_once (__DIR__.'/inc/header.php');
?>


        <div id="page-wrapper">

            <div class="container-fluid">

				<div class="col-md-12">

					<h2>Add gallery image.</h2>

					<div>
						<?php 
						    if(session::getter("gallery_success")){ ?> <p style="color: red;font-weight: bold;font-size: 20px;"><?php echo session::getter("gallery_success"); ?></p> <?php }else{ ""; }

						    if(session::getter("gallery_error")){ ?> <p style="color: red;font-weight: bold;font-size: 20px;"><?php echo session::getter("gallery_error"); ?></p> <?php }else{ ""; }

						    if(session::getter("gallery_deleted")){ ?> <p style="color: red;font-weight: bold;font-size: 20px;"><?php echo session::getter("gallery_deleted"); ?></p> <?php }else{ ""; }
						?>
					</div>
					

					<form action="gallery-process.php" method="POST" enctype="multipart/form-data">
						<label for="">upload image</label>
						<input type="file" name="galleryimg"><br>
						<button class="btn btn-primary" name="submit">upload</button>
					</form>


				</div>
				</hr><br><br>
				<div class="col-md-12">
					<h3 style="margin-top: 50px;margin-bottom: 40px;">Gallery image those are now shown on the main page.</h3>
				</div>
				<div class="col-md-12">
	                    <?php 
	                        $tbName = "gallery";
	                        $selectArr = array(
	                          'return_type' => 'all'
	                        );
	                        $selectAll = $db->selection($tbName,$selectArr);
	                        $i = 0;
	                        if($selectAll){
	                            foreach ($selectAll as $value) { 
	                            	if($i%3==0){ ?>
	                            		</div><div class="col-md-12">
	                            	<?php } 
	                    ?>
					<div class="col-md-4">
								<img src="../img/gallery/<?php echo $value['galleryimg']; ?>" style="max-width: 300px;" alt="">
								<div style="margin-top: 20px;">
				                    <a href="galleryimgdel.php?id=<?php echo $value['id']; ?>">Delete</a>
				                	<hr><br>
								</div>

					</div>
	                    <?php $i++;
	                        		}
		                        }else{ 
		                            echo "no gallery image yet now."; 
		                        } 
	                    ?>

				</div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


<?php 

    require_once (__DIR__.'/inc/footer.php');
    session::unseter("gallery_success");
    session::unseter("gallery_error");
    session::unseter("gallery_deleted");
    
?>