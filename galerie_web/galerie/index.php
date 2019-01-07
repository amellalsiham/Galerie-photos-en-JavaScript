<?php 

include_once 'controllers/connect_db.php';

$db = new Database('galerie'); 

if (isset($_GET['page']) && !empty($_GET['page'])) {
	
	$page = trim(strtolower($_GET['page'])) ; 

}else{

	$page = 'accueil' ; 

}

$allPages =  scandir('controllers/'); 

if (in_array($page.'_controller.php',$allPages)) {

	include_once 'controllers/'.$page.'_controller.php';
	include_once 'models/'.$page.'_model.php'; 
	include_once 'views/'.$page.'_view.php'; 

}else{

	echo 'erreur 404'; 
}

?>