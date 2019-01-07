<?php 

	/**
	 * 
	 */
	class Image{
		
		static public function send_img($img,$email,$db){
			
			if (isset($img)) {
				
				if ($img['size'] < 10000000) {
		
				
				
					$infoImage = pathinfo($img['name']);
					$extensionImage = $infoImage['extension'];
					$tabExtension = array('jpeg','png','gif','jpg');
					
					if (in_array($extensionImage,$tabExtension)) {
						$img_name = time().rand().'.'.$extensionImage ;
						move_uploaded_file($img['tmp_name'], 'models/images/'.$img_name);
					
						$user_id = self::getUserId($email,$db) ;  
						$name_save = 'models/images/'.$img_name ; 
						$req = $db->prepare('INSERT INTO images(img_name,user_id) VALUES(?,?)'); 
						$req->execute(array($name_save,$user_id )); 
					}
				}
			}
		}


		static public function load_img($db,$email){

			$user_id = self::getUserId($email,$db) ;
			$req = $db->prepare('SELECT * FROM images WHERE user_id = ?'); 
			$req->execute(array($user_id));
			return $req ; 
			
		}

		private function getUserId($email,$db){
			$req = $db->prepare('SELECT * FROM users WHERE email = ?');
			$req->execute(array($email));
			$data = $req->fetch(); 
			$user_id = $data['user_id'] ; 

			return $user_id ; 


		}

	}






?>