<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>galerie</title>
		<meta charset="utf-8">
		<!-- CSS -->
		<link href="views/style/galerie_style.css" rel="stylesheet" type="text/css" />
		<link href="views/style/lightbox.min.css" rel="stylesheet" type="text/css" />
		<link href="views/style/accueil_style.css" rel="stylesheet" type="text/css" />
		<!-- js -->
		<script type="text/javascript" src="views/js/lightbox-plus-jquery.min.js"></script>
		<script type="text/javascript" src="views/js/animation.js"></script>

	</head>
	<body>

		<div class="header_page">
			<ul id="nav">
				<li><svg width="30" height="30">
				<img src="views/style/images/img2.jpg" align="left" width="80" height="50">
				</svg>
				</svg></li>
				<li class="current"><a href="?page=accueil">Accueil</a></li>
				<li class="right"><a href="?page=connection">Se connecter</a></li>
				<li class="right"><a href="?page=inscription">Inscrivez vous !</a></li>
			</ul>
		</div>

		<h1>Galerie photo</h1>

		<div id="galerie">
		<!-- afficher les images de la galerie -->
		<?php 
			while($data = $req->fetch()) {
			
				echo '<a data-lightbox="mygallery" href="'.$data['img_name'].'"> <img src="'.$data['img_name'].'" 	class="img_load"/> </a>';
			
			}
		?>
		</div>
		<button id="animation">Animation</button>

		<form method='post'  enctype='multipart/form-data'>
			<p>
				<table>
					<tr>
						<td><input type='file' name='image' id='image'/></td>
					</tr>
					<tr>
						<td>
							<input type='submit' value='Ajouter une photo'/>
						</td>
					</tr>
			
				</table>
			</p>
		</form>
	</body>
</html>

