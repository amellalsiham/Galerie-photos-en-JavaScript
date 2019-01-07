<?php 
	
	class User{

		/**
		 *inscrire un utilisateur das la base de donnees
		 *	
		 *@param {$pseudo} le pseudo de l'utilisateur inscrit.
		 *@param {$email} l'email de l'utilisateur inscrit.
		 *@param {$password} le password de l'utilisateur inscrit.
		 *@param {$passwordConfi} le password de confirmation de l'utilisateur inscrit.
		 *@param {$db} base de donnees d'inscription.
		 *
		 */
				
		static public function signup($pseudo ,$email ,$password,$passwordConfi,$db){

			if (isset($pseudo) && isset($email) && isset($password) && isset($passwordConfi)) {

				//verifier la confirmation du password

				if ($password != $passwordConfi) {
					header("location: ../galerie/?page=inscription&error=1&pass=1");
				}

				//verifier l'existance de l'email

				$req = $db->prepare("SELECT COUNT(*) AS nbmail FROM users WHERE email = ?");
				$req->execute(array($email));
				$donnees = $req->fetch(); 

				if ($donnees['nbmail']!=0) {
					header("location: ../galerie/?page=inscription&error=1&email=1");
				}

				//inscription du user

				if ($password == $passwordConfi && $donnees['nbmail']==0) {

					$password = sha1($password);
					$req = $db->prepare("INSERT INTO users(pseudo,email,password) VALUES(?,?,?)");
					$req->execute(array($pseudo,$email,$password));
					//header("location: ../galerie/?page=connection");
				}
			}

		}

		/**
		 *conncté un utilisatuer
		 *
		 *@param {$email} l'email de l'utilisateur.
		 *@param {$password} le password de l'utilisateur.
		 *@param {$db} base de donnees de connexion.
		 *
		 */

		static public function login($email,$password,$db){

			if (isset($email) && isset($password)) {

					$password = sha1($password) ;  
					$req = $db->prepare('SELECT * FROM users WHERE email = ?');
					$req->execute(array($email));
					$data = $req->fetch(); 
				
				//vérification du mot de pass
				if($password == $data['password']){

					session_start(); 
					$_SESSION['email'] = $email ; 
					$_SESSION['password'] =  $password ;
					$_SESSION['isLogin'] =  1 ;

					header("location: ../galerie/?page=galerie&succes=1") ; 

				}else{

					header("location: ../galerie/?page=connection&error=1") ;
				}

			
			}
		}


	}



?>