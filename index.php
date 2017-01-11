<?php 
  require_once "inc/header.php";
  require_once "config/dbconfig.php";
  $db = new Database;
  //$db->dbCreation("berkeley");
  //$db->createTable("gallery");
  //$db->dropTable("gallery");
?>   
   
   <!-- start of hero area  -->
   
   
   <div class="hero_area">
   		<div class="hero_overlay">
			<div class="container">
				<div class="row">
					<div class="hero_text">
						<h3>build your home with us</h3>
						<h3>we will give best services</h3>
					</div>
				</div>
			</div>
		</div>
   </div>
   
   
   <!-- end of hero area  -->
   
   
   
   
   
   
   <!-- start of about us -->
   
   <div class="mission-vission-area-area section-padding">
   	<div class="container">
   		<div class="row">
   			<div class="col-md-6">
				<div class="mission-vission-area-text">
					<h3>Our Mission</h3>
					<p>Berkeley Homes is an on track full-service real estate development and management company.
Our objective is to be a profitable leader in commercial, retail and residential real estate. We will
serve our customers&#39; needs and will consistently produce and manage developments of lasting
value to the community.</p>
					<p>We recognize the need to be flexible, entrepreneurial, and aggressive,
both as individuals and as a company. We believe in teamwork, innovation, professionalism, and
long-term decision-making. We endeavor to preserve and enhance our reputation for integrity
through all our actions.</p>
					<a href="mission-vission.php"><button class="btn btn-brown">Read More</button></a>
				</div>
   			</div>
   			<div class="col-md-6">
				<div class="mission-vission-area-video">
					<i class="fa fa-play-circle-o"></i>
				</div>
   			</div>
   		</div>
   	</div>
   </div>
   <!-- end of about us -->
   
   
   
   <!--Photo gallery -->   
   <div class="photo-gallery-area section-padding">
   	<div class="container">
   		<div class="row">
   			<div class="section-title">
   				<h3>Photo Gallery</h3>
   			</div>
   			<div class="photo-gallery">
   				<div class="col-md-4">
   					<div class="row">
   						<a href="img/photo-one.jpeg" data-lightbox="roadtrip" data-title="My caption"><img src="img/photo-one.jpeg" alt=""></a>
   					</div>
   				</div>
   				<div class="col-md-4">
   					<div class="row">
   						<a href="img/photo-one.jpeg" data-lightbox="roadtrip" data-title="My caption"><img src="img/photo-two.jpg" alt=""></a>
   					</div>
   				</div>
   				<div class="col-md-4">
   					<div class="row">
   						<a href="img/photo-one.jpeg" data-lightbox="roadtrip" data-title="My caption"><img src="img/photo-one.jpeg" alt=""></a>
   					</div>
   				</div>
   				<div class="col-md-4">
   					<div class="row">
   						<a href="img/photo-one.jpeg" data-lightbox="roadtrip" data-title="My caption"><img src="img/photo-two.jpg" alt=""></a>
   					</div>
   				</div>
   				<div class="col-md-4">
   					<div class="row">
   						<a href="img/photo-one.jpeg" data-lightbox="roadtrip" data-title="My caption"><img src="img/photo-one.jpeg" alt=""></a>
   					</div>
   				</div>
   				<div class="col-md-4">
   					<div class="row">
   						<a href="img/photo-one.jpeg" data-lightbox="roadtrip" data-title="My caption"><img src="img/photo-two.jpg" alt=""></a>
   					</div>
   				</div>
   			</div>
   		</div>
   	</div>
   </div>
   <!--Photo gallery -->
   
   
<?php 

  require_once "inc/footer.php";

?>