<!DOCTYPE html>
<html>
<head>
	<title>galerie</title>
	<meta charset="utf-8">
	<!-- CSS -->
	<link href="views/style/galerie_style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="views/style/lightbox.css" type="text/css" media="screen" />
	<!-- Jquery -->
	<script src="views/js/prototype.js" type="text/javascript"></script>
	<script src="views/js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	<script src="views/js/lightbox.js" type="text/javascript"></script>

</head>
<body>
	<div id="galerie">
	<?php 
		while($data = $req->fetch()) {
			
			echo '<a rel="lightbox" href="'.$data['img_name'].'"> <img src="'.$data['img_name'].'" class="img_load"/> </a>';
			
		}
	?>
	</div>

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

