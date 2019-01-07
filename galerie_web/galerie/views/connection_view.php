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
		<li><svg width="30" height="30">
			<img src="views/style/images/img2.jpg" align="left" width="80" height="50">
		</svg>
		</svg></li>
		<li class="current"><a href="?page=accueil">Accueil</a></li>
		<li class="right"><a href="?page=inscription">Inscrivez vous !</a></li>
	</ul>
</div>
		

		<div class="login">


			<h1>Connexion</h1>
			<?php 

			if (isset($_GET['error'])) {

					echo'<p>mot de passe ou email incorrecte</p>';

			}

			?>

			<form method="post">

				<div class="textbox">

					<input type="email" name="email" required placeholder="email@email.com">
					
				</div>
				<div class="textbox">
					<input type="password" name="password" required placeholder="****">
				</div>
				

				<input type="submit" class="btn" value="Connexion"></input>
			</form>
			<p><a href="?page=inscription">Inscrivez vous</a></p>

		</div>
	

</body>
</html>

