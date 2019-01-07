<?php 

	/**
	 *class Image oppération sur les images de la galerie
	 */

	class Image{
		
		/**
		 * savgarder une image dans le dossier models/images 
		 * et charger les coordonees dans la base de donnees 
		 *
		 *@param {$img} image charger dans le formulaire.
		 *@param {$email} email de l'utilsateur conncté
		 *@param {$db} base de donnée connecté.
		 *
		 */

		static public function send_img($img,$email,$db){
			
			if (isset($img)) {
				
				//verifier la taille de l'image 
				if ($img['size'] < 10000000) {
		
				
				
					$infoImage = pathinfo($img['name']);
					$extensionImage = $infoImage['extension'];
					$tabExtension = array('jpeg','png','gif','jpg');
					
					//verifier l'extension de l'image et la sauvgarder 
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


		/**
		 * charger les donnees des images liées a l'utilisateur connecté 
		 *
		 *@param {$email} email de l'utilsateur conncté
		 *@param {$db} base de donnée connecté.
		 *
		 */

		static public function load_img($db,$email){

			$user_id = self::getUserId($email,$db) ;
			$req = $db->prepare('SELECT * FROM images WHERE user_id = ?'); 
			$req->execute(array($user_id));
			return $req ; 
			
		}

		/**
		 * récupérer le user_id de l'utilisatuer connecté.  
		 *
		 * @param {$email} email de l'utilsateur conncté.
		 * @param {$db} base de donnée connecté.
		 * @return {$user_id} le user_id de l'utilisatuer connecté.
		 *
		 */
		
		private function getUserId($email,$db){
			
			$req = $db->prepare('SELECT * FROM users WHERE email = ?');
			$req->execute(array($email));
			$data = $req->fetch(); 
			$user_id = $data['user_id'] ; 

			return $user_id ; 


		}

	}






?>