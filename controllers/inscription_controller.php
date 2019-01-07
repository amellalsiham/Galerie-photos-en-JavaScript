<?php 
	
	require 'user.php';
	User::signup($_POST['pseudo'] ,$_POST['email'] ,$_POST['password'],$_POST['passwordConfi'],$db->db);

 ?>