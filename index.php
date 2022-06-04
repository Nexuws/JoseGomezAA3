<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" href="estilosMain.css">
	<title>Pagina Principal</title>
</head>

<body>

	<center>
		<br>
		<h1> MUSICA ECUATORIANA</h1>
		<br>
		<audio src="Media/JJ.mp3" controls loop autoplay>
		</audio>
	</center>

	<div class="contenedor">

		<!--<button id="btn-abrir-popup" class="btn-abrir-popup">Abrir Ventana Emergente</button>-->
		<article>
			<h1>Presentacion</h1>
			<p>
			<pre>    - Estudiante: Jose Sebastian Gomez Maldonado </pre>
			<pre>    - Curso: Quinto "A" </pre>
			<pre>    - Materia: Desarrollo Basado en Plataformas </pre>
			</p>

			<h1>Ingreso el sistema</h1>
			<button id="btn-abrir-popup" class="btn-abrir-popup">Ingresar</button>
		</article>

		<br></br>
		<h1>Slider</h1>
		<br>
		<div class="slider">
			<ul>
				<li>
					<div class="div1">
						
						<img src="Media/hacker-hackerman.gif" alt="" width="300" height="200">
						
					</div>
				</li>
				<li>
					<div class="div2">
	
						<img src="Media/hackerman-rami.gif" alt="" width="300" height="200">

					</div> 
				</li>
				<li>
					<div class="div3">
	
						<img src="Media/dance.gif" alt="" width="300" height="200">
					   
					</div>
				</li>
			</ul>
		</div>

		<div class="overlay" id="overlay">
			<div class="popup" id="popup">
				<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
				<h3>LOGIN</h3>
				<h4>Ingrese su usuario y contrasenia</h4>
				<form action="">
					<div class="contenedor-inputs">
						<input type='text' name='usuario' id='user' placeholder="Usuario">
						<input type='password' name='contrasenia' id='pass' placeholder="Contraseña">
					</div>

					<button href=video.html class="btn-submit" id='ingresoVideo'>Ingresar</button>

				</form>
			</div>
		</div>
	</div>

	<script src="popup.js"></script>
</body>

</html>