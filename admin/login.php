<?php 
  require_once (__DIR__.'/../helper/session.php');
  require_once (__DIR__.'/../config/dbconfig.php');
  $db = new Database;
  session::init();
  //$db->dbCreation("berkeley");
  //$db->createTable("gallery");
  //$db->dropTable("gallery");
  
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

          <div class="form-group">
            <label for="email">Email address:</label>
            <input name="email" value=" <?php if(session::getter('email')){ echo session::getter('email'); } ?> " class="form-control" id="email">
            <!-- alert message -->
            <?php if(session::getter('empty-email')){ ?>
                <p class="alert-text"><?php echo session::getter('empty-email'); ?></p> 
            <?php } ?>
            <?php if(session::getter('invalid-email')){ ?>
              <p class="alert-text"><?php  echo session::getter('invalid-email'); ?></p> 
            <?php } ?>
          </div>

          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" name="password" class="form-control" id="pwd">
            <!-- alert message -->
            <?php if(session::getter('empty-password')){ ?>
                <p class="alert-text"><?php echo session::getter('empty-password'); ?></p> 
            <?php } ?>
          </div>

          <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
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