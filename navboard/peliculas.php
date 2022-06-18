<?php

$connect=mysqli_init(); mysqli_ssl_set($connect, NULL, NULL, NULL, NULL, NULL); mysqli_real_connect($connect, "epdlv.mysql.database.azure.com", "alejandro@epdlv", "1qaz@WSX", "prueba", 3306);
if ($connect->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $connect->connect_errno . ") " . $connect->connect_error;
}


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
				<a href="../index.php">Inicio</a>
				<a href="programas.php">Programas</a>
				<a href="peliculas.php" class="activo">Películas</a>
				<a href="series.php">Series</a>
			</nav>
		</div>
	</header>

	<main>
		<table>
			<tbody>
				<div class="tabla_peliculas">
					<tr>
						<td>
							<div class="pelicula">
								<a href=""><img src="https://agpimages.s3.eu-west-3.amazonaws.com/1917.jpg" alt=""></a>
							</div>
						</td>
						<td>
							<div class="pelicula">
								<a href="#"><img src="https://agpimages.s3.eu-west-3.amazonaws.com/AVATAR.jpg" alt=""></a>
							</div>
						</td>
						<td>
							<div class="pelicula">
							<a href="#"><img src="https://agpimages.s3.eu-west-3.amazonaws.com/BASTARDOS.jpg" alt=""></a>
							</div>
						</td>
						<td>
							<div class="pelicula">
								<a href="#"><img src="https://agpimages.s3.eu-west-3.amazonaws.com/DRSTRANGE.jpg" alt=""></a>
							</div>
						</td>
						<td>
							<div class="pelicula">
								<a href="#"><img src="https://agpimages.s3.eu-west-3.amazonaws.com/hoyo.jpg" alt=""></a>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="pelicula">
								<a href="#"><img src="https://agpimages.s3.eu-west-3.amazonaws.com/JUMANJIJUNGLA.jpg" alt=""></a>
							</div>
						</td>
						<td>
							<div class="pelicula">
								<a href="#"><img src="https://agpimages.s3.eu-west-3.amazonaws.com/PF.jpg" alt=""></a>
							</div>
						</td>
						<td>
							<div class="pelicula">
								<a href="#"><img src="https://agpimages.s3.eu-west-3.amazonaws.com/SAW.jpg" alt=""></a>
							</div>
						</td>
						<td>
							<div class="pelicula">
								<a href="#"><img src="https://agpimages.s3.eu-west-3.amazonaws.com/SONIC2.jpg" alt=""></a>
							</div>
						</td>
						<td>
							<div class="pelicula">
								<a href="#"><img src="https://agpimages.s3.eu-west-3.amazonaws.com/SOC.jpg" alt=""></a>
							</div>
						</td>
					</tr>
				</div>
			</tbody>
		</table>
		
	</main>
	
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
</body>
</html>