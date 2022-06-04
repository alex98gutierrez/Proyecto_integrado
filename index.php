<?php

$connect=mysqli_init(); mysqli_ssl_set($connect, NULL, NULL, NULL, NULL, NULL); mysqli_real_connect($connect, "epdlv.mysql.database.azure.com", "alejandro@epdlv", "1qaz@WSX", "prueba", 3306);
if ($connect->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $connect->connect_errno . ") " . $connect->connect_error;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
	<title>El planeta de los Videos</title>
</head>
<body>
	<header>
		<div class="contenedor">
			<h2 class="logotipo">El planeta de los vídeos</h2>
			<nav>
				<a href="#" class="activo">Inicio</a>
				<a href="#">Programas</a>
				<a href="#">Películas</a>
				<a href="#">Más Recientes</a>
				<a href="#">Mi lista</a>
			</nav>
		</div>
	</header>

	<main>
		<div class="pelicula-principal">
			<div class="contenedor">
				<h3 class="titulo">Interestellar</h3>
				<p class="descripcion">
					Narra las aventuras de un grupo de exploradores que hacen uso de un agujero de gusano recientemente descubierto para superar las limitaciones de los viajes espaciales tripulados y vencer las inmensas distancias que tiene un viaje interestelar.
				</p>
				<button role="button" class="boton"><i class="fas fa-play"></i>Reproducir</button>
				<button role="button" class="boton"><i class="fas fa-info-circle"></i>Más información</button>
			</div>
		</div>

		<div class="peliculas-recomendadas contenedor">
			<div class="contenedor-titulo-controles">
				<h3>Películas Recomendadas</h3>
				<div class="indicadores"></div>
			</div>

			<div class="contenedor-principal">
				<button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>

				<div class="contenedor-carousel">
					<div class="carousel">
						<div class="pelicula">
							<a href="#"><img src="img/1.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/2.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/3.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/4.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/5.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/6.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/7.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/1.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/2.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/3.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/1.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/2.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/3.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/4.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/5.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/6.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/7.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/1.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/2.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/3.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/4.png" alt=""></a>
						</div>
					</div>
				</div>

				<button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
			</div>
		</div>
	</main>
	
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
</body>
</html>