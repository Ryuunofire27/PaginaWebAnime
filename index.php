<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script type="text/javascript" src="scripts/jquery.js"></script>
	<script type="text/javascript" src="scripts/jqueri-ui.js"></script>
	<?php require_once 'informacion.php';?>

	<title>MiAnime.com</title>
</head>
<body>
	<div class="global">
		<div class="head">
			<div class="title">MiAnime.com</div>
		</div>
		<div class="body">
			<div id="menu">
				<div id="menu_contenedor">
					<div id="menu_contenido">
						<p>Anime</p>
						<p>Manga</p>
						<p>Ovas</p>
						<p>Peliculas</p>
					</div>
				</div>
				<div id="menu_boton"> A p r e t a m e </div>
			</div>
			<div id="contenedor">
				<div class="sup">
					<div class="izquierda">
						<img src=<?echo $imagen?>/>
					</div>
					<div class="derecha">
						<div id="title_cap_estrenos">Capitulos Estreno</div>
						<div id="cap_estrenos">
							<?	$i=1;
								while($i<=5){?>
								<div><?echo $nombre; ?></div>
							<? $i++;} ?>
						</div>
					</div>
				</div>
				<div class="inf">
					
				</div>
			</div>
		</div>
		<div class="foot">
			
		</div>
	</div>
	<script type="text/javascript" src="scripts/miscript.js"></script>
</body>
</html>