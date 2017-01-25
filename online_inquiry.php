<?php 
  require_once "inc/header.php";
  require_once (__DIR__.'/inc/important_header_file.php');
  if(!empty($_POST)){
  	extract($_POST);
  	helper::validation($name);helper::validation($address);
  	helper::validation($mobile);helper::validation($email);helper::validation($message);
  	if(!empty($name) && !empty($address) && !empty($mobile) && !empty($email) && !empty($message)){
		$tbName = "inquiry";
		$cond = array(
		  "name" => "$name",
		  "address" => "$address",
		  "mobile" => "$mobile",
		  "email" => "$email",
		  "message" => "$message",
		);
		$isInserted = $db->insertion($tbName,$cond);
		if($isInserted){
			session::setter("success","message send successfully");
		}else{
			session::setter("error","message not send");
		}
  	}else{
  		session::setter("error","one more field was empty");
  	}
  }
?>  

<div class="inquiry_form" style="margin-top: 40px;margin-bottom: 60px;">
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			<h4 style="margin-bottom: 20px;font-weight: bold;">Send us message if any query.</h4>
			<?php if(session::getter("success")){  ?>
				<p style="color: #DE5145;font-weight: 16px;"><?php echo session::getter("success"); ?></p>
			<?php } ?>
			<?php if(session::getter("error")){  ?>
				<p style="color: #DE5145;font-weight: 16px;"><?php echo session::getter("error"); ?></p>
			<?php } ?>
			<form action="" method="POST">
				<div class="form-group">
				  <label for="name">Name:</label>
				  <input type="text" name="name" class="form-control" id="name" >
				</div>
				<div class="form-group">
				  <label for="address">Address:</label>
				  <input type="text" name="address" class="form-control" id="address" required>
				</div>
				<div class="form-group">
				  <label for="mobile">Mobile:</label>
				  <input type="text" name="mobile" class="form-control" id="mobile" required>
				</div>
				<div class="form-group">
				  <label for="email">Email:</label>
				  <input type="email" name="email" class="form-control" id="email" required>
				</div>
				<div class="form-group">
				  <label for="message">Message:</label><br>
				  <textarea name="message" class="form-control" id="message" rows="10" style="width: 100%;" required></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>

<?php 

  	require_once "inc/footer.php";
    session::unseter("success");
    session::unseter("error");

?>