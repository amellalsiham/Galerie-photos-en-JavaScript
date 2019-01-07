<?php 

	//charger la classe user.
	require 'user.php';

	//recupérer les champs dans le formulaire pour l'inscription.
	User::signup($_POST['pseudo'] ,$_POST['email'] ,$_POST['password'],$_POST['passwordConfi'],$db->db);

 ?>