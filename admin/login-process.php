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
				$password = md5($password);
				$tbName = "admin";
				$selectArr = array(
				  'where' => array('email'=>$email,'password'=>$password),
				  'return_type' => 'one'
				);
				$result =  $db->selection($tbName,$selectArr);
				if($result){
					session::setter('admin','true');
					session::setter('email',$email);
					header("Location:index.php");
				}else{
					var_dump($result);
					echo "something wrong u entered.";
				}
			}else{
				session::setter('email',$email);
				session::setter('invalid-email','email is invalid');
				header("Location:login.php");
			}
		}else{
			if(empty($email)){
				session::setter('empty-email','email is empty');
			}
			if(!empty($email)){
				session::setter('email',$email);
			}
			if(empty($password)){
				session::setter('empty-password','password is empty');
			}
			header("Location:login.php");
		}
	}