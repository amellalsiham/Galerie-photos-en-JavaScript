<?php 
	
	require 'user.php';
	User::login($_POST['email'] ,$_POST['password'],$db->db);


 ?>