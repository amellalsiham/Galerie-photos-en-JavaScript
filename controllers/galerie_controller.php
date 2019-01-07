<?php 

	session_start(); 
	
	require 'image.php';

	if(!isset($_SESSION['isLogin']) && !$_SESSION['isLogin']){
		header("location: ../galerie/?page=connection&error=1"); 
	}else{
		$email=$_SESSION['email'] ;

		Image::send_img($_FILES['image'],$email,$db->db); 

 
		$req=Image::load_img($db->db,$email);
		
		


	}


 ?>