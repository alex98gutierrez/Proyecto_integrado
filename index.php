<?php

$connect=mysqli_init(); mysqli_ssl_set($connect, NULL, NULL, NULL, NULL, NULL); mysqli_real_connect($connect, "epdlv.mysql.database.azure.com", "alejandro@epdlv", "1qaz@WSX", "epdlv", 3306);
if ($connect->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $connect->connect_errno . ") " . $connect->connect_error;
}

$sql = "SELECT titulo, descripcion, trailer FROM film WHERE film_id = 1;";

$result = $connect->query($sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/estilos.css">

	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/f2c65a301e.js" crossorigin="anonymous"></script>

	<title>El planeta de los Videos</title>
</head>
<body>
	<header>
		<div class="contenedor">
			<h2 class="logotipo"><a href="../index.php"><i class="fa-solid fa-earth-europe" ></i></a> El planeta de los vídeos</h2>
			<nav>
				<a href="index.php" class="activo">Inicio</a>
				<a href="navboard/programas.php">Programas</a>
				<a href="navboard/peliculas.php">Películas</a>
				<a href="navboard/series.php">Series</a>
			</nav>
		</div>
	</header>

	<main>
		<div class="pelicula-principal">
			
			<img src="https://agpimages.s3.eu-west-3.amazonaws.com/SOC.jpg" ></img>
			
			<div class="contenedor">
				
				<h3 class="titulo">
					<?php
						$row = $result->fetch_assoc();
						$titulo=$row['titulo'];
						$descripcion=$row['descripcion'];
						$trailer=$row['trailer'];

						echo "<a>$titulo</a>";
					?>
				</h3>
				<p class="descripcion">
				<?php
						echo "<a>$descripcion</a>";
					?>
				</p>
				<button type="button" class="boton"><i class="fas fa-play"></i>Reproducir</button>
				<button type="button" class="boton" onclick="window.open('https://en.wikipedia.org/wiki/Straight_Outta_Compton_(film)')"><i class="fas fa-info-circle"></i>Más información</button>
				
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
							<a href="ver_pelicula/1917.php"><img src="https://agpimages.s3.eu-west-3.amazonaws.com/1917.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="ver_pelicula/avatar.php"><img src="https://agpimages.s3.eu-west-3.amazonaws.com/AVATAR.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="ver_pelicula/malditos_bastardos.php"><img src="https://agpimages.s3.eu-west-3.amazonaws.com/BASTARDOS.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="ver_pelicula/dr_strange.php"><img src="https://agpimages.s3.eu-west-3.amazonaws.com/DRSTRANGE.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="ver_pelicula/el_hoyo.php"><img src="https://agpimages.s3.eu-west-3.amazonaws.com/hoyo.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="ver_pelicula/jumanji_welcome_to_the_jungle.php"><img src="https://agpimages.s3.eu-west-3.amazonaws.com/JUMANJIJUNGLA.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="ver_pelicula/pulp_fiction.php"><img src="https://agpimages.s3.eu-west-3.amazonaws.com/PF.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="ver_pelicula/saw.php"><img src="https://agpimages.s3.eu-west-3.amazonaws.com/SAW.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="ver_pelicula/straight-outta-compton.php"><img src="https://agpimages.s3.eu-west-3.amazonaws.com/SOC.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="ver_pelicula/sonic_2.php"><img src="https://agpimages.s3.eu-west-3.amazonaws.com/SONIC2.jpg" alt=""></a>
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