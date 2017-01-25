<?php 
  require_once (__DIR__.'/inc/important_header_file.php');
  // if cookie setet then go to index.php page
  if(helper::cookieSetter()){
      header("Location:index.php");
      exit();
  }
  
?>   
   
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>admin login</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
<style>
  .admin-login-header{
      font-weight: bold;
      margin-top: 50px;
      margin-bottom: 30px;
      text-transform: capitalize;
      color: #333;
  }
</style>
</head>
<body>
  <div class="admin-login-panel">
    <div class="col-md-4 col-md-offset-4">
        <h4 class="admin-login-header">admin login</h4>
        <form action="login-process.php" method="post">

          <!-- wrong input error showing area -->
          <?php if(session::getter('wrong-email') or session::getter('wrong-password') or session::getter('less-password')){ ?>        
          <div class="error-area">
            <?php if(session::getter('wrong-email')){ ?>
                  <p class="alert-text"><?php echo session::getter('wrong-email'); ?></p>
            <?php } ?>
            <?php if(session::getter('wrong-password')){ ?>
                  <p class="alert-text"><?php echo session::getter('wrong-password'); ?></p>
            <?php } ?>
          </div>
          <?php } ?><!-- end of wrong input error showing area -->



          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" name="email" value=" <?php if(session::getter('email')){ echo session::getter('email'); } ?> " class="form-control" id="email">
            <!-- alert message -->
            <?php if(session::getter('empty-email')){ ?>
                <p class="alert-text"><?php echo session::getter('empty-email'); ?></p> 
            <?php } ?>
            <?php if(session::getter('invalid-email')){ ?>
              <p class="alert-text"><?php  echo session::getter('invalid-email'); ?></p> 
            <?php } ?><!-- end of alert message -->
          </div>

          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" name="password" class="form-control" id="pwd">
            <!-- alert message -->
            <?php if(session::getter('empty-password')){ ?>
                <p class="alert-text"><?php echo session::getter('empty-password'); ?></p> 
            <?php } ?><!-- end of alert message -->
          </div>

          <div class="checkbox">
            <label><input name="rememberme" type="checkbox"> Remember me</label>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
  </div>
</body>
</html>

<?php 
  session::destroy();
?>