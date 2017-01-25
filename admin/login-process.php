<?php 
	
 	    require_once (__DIR__.'/inc/important_header_file.php');

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
					if($rememberme=='on'){
						setcookie('user',$email,time()+60);
					}
					session::setter('admin','true');
					session::setter('email',$email);
					header("Location:index.php");
				}else{

					$tbName = "admin";
					$selectArr = array(
					  'where' => array('email'=>$email),
					  'return_type' => 'rowCount'
					);
					$result =  $db->selection($tbName,$selectArr);
					if(!$result){					
						session::setter('wrong-email','email is wrong.');
					}
					$selectArr = array(
					  'where' => array('password'=>$password),
					  'return_type' => 'rowCount'
					);
					$result =  $db->selection($tbName,$selectArr);
					if(!$result){
						session::setter('wrong-password','password is wrong.');
					}
					session::setter('email',$email);
					header("Location:login.php");	
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