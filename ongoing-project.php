<?php 
	require_once (__DIR__.'/inc/important_header_file.php');
	require_once "inc/header.php";
?>

<div class="container">
	<div class="hero-img">
		<img src="img/ongoing_project-hero.jpg" style="width: 100%;margin-bottom: 20px;" alt="">
	</div>
</div>

<div class="project_details_area">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">

			<?php 
			    $tbName = "projects";
			    $selectArr = array(
			      'where' => array('project_cat'=>'ongoing_project'),
			      'return_type' => 'all'
			    );
			    $selectAll = $db->selection($tbName,$selectArr);
			    if($selectAll){
			        foreach ($selectAll as $key => $value) {

			?>
						<div class="project-one">
							<div class="project-desc">
								<?php echo $value['projects_description'];  ?>
							</div>
							<?php if($value['project_img']){ ?>
							<div class="project-img">
							<img src="img/project/<?php echo $value['project_img'];  ?>" alt="">
							</div>
							<?php } ?>
							<hr><br>
						</div>
			<?php 
				} }else{
					echo "no upcomming product yet now.";
				} 
			?>

			</div>
		</div>
	</div>
</div>

<?php 
	require_once "inc/footer.php";
?>