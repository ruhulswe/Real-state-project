<?php 

	
	class helper{


		public static function validation($data){

			$data = trim($data);
			$data = stripcslashes($data);
			$data = htmlspecialchars($data);
			return $data;
			echo "nuralam";

		}



		public static function email_validation($email){

			if(filter_var($email,FILTER_VALIDATE_EMAIL)){
				return TRUE;
			}else{
				return FALSE;
			}

		}



		public static function formateDate($date){
				
			return date('F j,Y ', strtotime($date));

		}



	}

?>