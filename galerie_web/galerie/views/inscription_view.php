<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Accueil</title>
		<meta charset="utf-8">
		<link href="views/style/form_style.css" rel="stylesheet" type="text/css" />
		<link href="views/style/accueil_style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div class="header_page">
			<ul id="nav">
				<li>
					<svg width="30" height="30">
						<img src="views/style/images/img2.jpg" align="left" width="80" height="50">
					</svg>
				</li>
				<li class="current"><a href="?page=accueil">Accueil</a></li>
				<li class="right"><a href="?page=connection">Se connecter</a></li>
			</ul>
		</div>
		<div class="login">
			<h1>Iscription</h1>
			<?php 

				if (isset($_GET['error'])) {

					if (isset($_GET['pass'])) {
					echo'<p class="erreur_mpd">probleme de mot de passe</p>';
					}

					if (isset($_GET['email'])) {
					echo'<p class="erreur_mpd">Email deja existant</p>';
					}  
				}

			?>
		<form method="post">
			<div class="textbox">
				<td><input type="text" name="pseudo" required placeholder="Pseudo"></td>
			</div>
			<div class="textbox">
				<td><input type="email" name="email" required placeholder="email@email.com"></td>
			</div>
			<div class="textbox">		
				<td><input type="password" name="password" required placeholder="****"></td>
			</div>
			<div class="textbox">		
				<td><input type="password" name="passwordConfi" required placeholder="****"></td>
			</div>
			<button type="submit" class="btn">Inscription</button>
		</form>
	</div>
</body>
</html>