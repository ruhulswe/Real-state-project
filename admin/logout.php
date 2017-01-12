<?php 


  require_once (__DIR__.'/../helper/session.php');
  require_once (__DIR__.'/../config/dbconfig.php');
  require_once (__DIR__.'/../helper/helper.php');
  $db = new Database;
  session::init();
  session::unseter('email');

  header("Location:login.php");
  exit();
