<?php 
	
	//demmarer une session
	session_start(); 
	
	//charger class image 
	require 'image.php';

	//verification de la connexion de l'utilisateur 
	if(!isset($_SESSION['isLogin']) && !$_SESSION['isLogin']){

		header("location: ../galerie/?page=connection&error=1"); 

	}else{

		//savgareder l'email de l'utilisatuer connecté
		$email=$_SESSION['email'] ;

		//sauvgarder les images 
		Image::send_img($_FILES['image'],$email,$db->db); 

		//charger les images de l'utilisateur 
		$req=Image::load_img($db->db,$email);

	}


 ?>