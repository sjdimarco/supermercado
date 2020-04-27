<?php
include('include/ini.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>ADAES Costa Rica</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
	<script type="text/javascript" src="/js/script.js"></script>
</head>

<body onload="loadTab(event)">
<?php include 'include/header.php';?>
	<section id="main-content">
	
		<article>
			<header>
				<h1>Acerca de nuestra asociación</h1>
			</header>
			
			<div class="content">
			
				 <audio preload="auto" id="clicker">
					<source src="audios/click.mp3" type="audio/mp3"/>
				</audio>
			
				<div class="tab">
					<button class="tablinks" onclick="openTab(event, 'misionvision')">Misión Visión</button>
					<button class="tablinks" onclick="openTab(event, 'reseñahistorica')">Reseña Historica</button>
				</div>
				<div id="misionvision" class="tabcontent">
					<h2>Misión</h2>
					<p>Nuestra visión es proveer, un espacio a todas las personas con discapacidad visual   del país que practiquen el ajedrez de forma competitiva o recreativa, apoyando su desarrollo e integración   plena a  las actividades  deportivas y sociales  de forma inclusiva.</p>
					<h2>Visión</h2>
					<p>Es nuestra misión el contribuir al reconocimiento pleno de los derechos  al deporte y recreación   de las personas con discapacidad del país, brindando espacios, torneos y capacitaciones que impulsen a nuestros asociados a disfrutar la experiencia frente al maravilloso universo que nos brinda  el tablero de ajedrez.</p>
				</div>
				
				<div id="reseñahistorica" class="tabcontent">
					<br />
					<p>La Asociación Deportiva de Ajedrecístas Especiales se constituyó el 19 de enero del año 2013 en San José Costa Rica  por un grupo de  entusiastas del ajedrez, en su mayoría personas no videntes  con el objetivo principal de promover la práctica de este deporte ciencia entre las personas con discapacidad visual.</p>
					<h2>Antecedentes</h2>
					<p>Debido a que el país requería de forma urgente  conformar una selección nacional de ajedrecistas no videntes para distintos torneos internacionales  el Comité Paraolímpico   Nacional con el apoyo de la Asociación de Deportes para Personas Ciegas convocó de forma emergente durante los años 2010 y 2011  a personas no videntes que supieran al menos lo básico del juego  y así tener una representación en torneos centroamericanos que ya otros países venían trabajando.
					<br />
					<br />
					Costa Rica de esta manera participó en el torneo centroamericano por equipos en Nicaragua en el año 2010, quedando en el último lugar y retándonos a   revertir esa historia.</p>
				</div>
			</div>
			
		</article> <!-- /article -->
	
	</section> <!-- / #main-content -->

<?php include 'include/footer.php';
?>
</body>
</html>