<?php 

	class session{

		public static function init(){
			if(version_compare(phpversion(), '5.4.0','<')){
				if(session_id() == ''){
					session_start();
				}
			}else{
				if(session_status() == PHP_SESSION_NONE){
					session_start();
				}
			}
		}

		public static function setter($key,$value)
		{
			$_SESSION["$key"] = $value;

			return true;
		}

		public static function getter($key){
			if(isset($_SESSION["$key"])){
				return $_SESSION["$key"];
			}else{
				return false;
			}
		}

		public static function unseter($key)
		{
			unset($_SESSION["$key"]);
		}

		public static function destroy()
		{
			session_destroy();
		}

	}