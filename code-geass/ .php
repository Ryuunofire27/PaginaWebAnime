<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Code Geass</title>
	<link rel="stylesheet" href="../css/secondary.css">
	<?php require_once '../informacion.php';?>
</head>
<body>
	<div id="anime">
		<center id="titulo">
			MiAnime.com
		</center>
		<div class="info" id="izquierda">
			<div class="imagen"><img id="imagen" src=<?echo $imagen?> alt="Code Geass"> </div>
			<div style="width: 100%; font-size: 16px">
				<div>
					<span class="span_izquierda">Tipo:</span>
					<span class="span_derecha">
						<?echo $tipo?>
					</span>
				</div>
				<div>
					<span class="span_izquierda">Genero:</span>
					<span class="span_derecha">
						<?echo $genero?>
					</span>
				</div>
				<div>
					<span class="span_izquierda">Duracion</span>
					<span class="span_derecha"><?echo $duracion?></span>
				</div>
				<div>
					<span class="span_izquierda">Emitido:</span>
					<span class="span_derecha"><?echo $emitido?></span>
				</div>
				<div>
					<span class="span_izquierda">Estado: </span>
					<span class="span_derecha"><?echo $estado?></span>
				</div>
			</div>
		</div>
		<div id="derecha">
			<div id="arriba">
				<div class="sinopsis_title"><?echo $nombre?></div>
				<div class="sinopsis">
					<p><?php echo $sinopsis;?>
					</p>
					<ul>
						Temporadas Anteriores
						<li>Code Geass R1</li>
						<li>Code Geass R2</li>
					</ul>

				</div>
			</div>
			<div id="abajo">
				<?if(is_null($video)){ ?>

				<?}else{ ?>
					<video src=<?echo $video?> style="width: 100%" controls>
						<code>video</code>	
					</video>
				<?} ?>
			</div>
		</div>
	</div>
</body>
</html>