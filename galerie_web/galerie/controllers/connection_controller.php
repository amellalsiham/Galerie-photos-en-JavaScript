<?php 
	//charger la classe user.
	require 'user.php';

	//recupérer les champs dans le formulaire pour ce connecté.
	User::login($_POST['email'] ,$_POST['password'],$db->db);


 ?>