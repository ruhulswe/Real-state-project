<?php 
	
	require_once (__DIR__.'/../helper/session.php');
	require_once (__DIR__.'/../config/dbconfig.php');
	require_once (__DIR__.'/../helper/helper.php');
	$db = new Database;
	session::init();

	if($_SERVER['REQUEST_METHOD']=='POST'){
		extract($_POST);
		$email = helper::validation($email);
		$password = helper::validation($password);
		if(!empty($email) && !empty($password)){
			if(helper::email_validation($email)){
				
			}else{
				/*session::setter('email',$email);
				session::setter('invalid-email','email is invalid');*/
			}
		}else{
			if(empty($email)){
				session::setter('empty-email','email is empty');
			}
			if(empty($password)){
				session::setter('empty-password','password is empty');
			}
			header("Location:login.php");
		}
	}