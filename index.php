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

	<script src="https://kit.fontawesome.com/eb083cc841.js" crossorigin="anonymous"></script>

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
							<a href="#"><img src="https://agpimages.s3.eu-west-3.amazonaws.com/oXIyGa4Mn3h4yIkEVPKmLgK7KhH.jpg?response-content-disposition=inline&X-Amz-Security-Token=IQoJb3JpZ2luX2VjEKD%2F%2F%2F%2F%2F%2F%2F%2F%2F%2FwEaCXVzLWVhc3QtMSJHMEUCIAok8fRgNFQu9v6siutjYrAwU%2Bp7tBZY8Ed7djkDtcoUAiEA2UeLRb699iCx%2FASk%2FSDGstOHr0BOwVyXN6xmsDeHotYq7QIIqf%2F%2F%2F%2F%2F%2F%2F%2F%2F%2FARAAGgw3MjgzNDM4NjI4MDIiDNQx0lRqqUbKZz0e7irBAvbbiNvHtJCyyAuW4IeIIYXSq%2BR1WVAclO2Pq7BKKxY6gQPb%2B8Vzim%2Fb%2BoF69wu4M%2BP8z2MHd0qTA4kwSXl3mrBKsm2Icd1grW4weaoRX26xXhE6Ry3hRdjUhq7U6b3FX72NVKozseE110HqVxi2WjMQDiVfaj%2BcsCR9Kx8jX4g2GJ%2BEfbMYb%2BgaRN599hlWQeRpHobrqXHlt4paQX4MBWG9YxWM0v4LGILmRfDUTyATjP%2FCrp%2F9WW9ryIpDstvPRWSzEqNuB2Xl1UcOn%2B328XIIENeszqaNRkgfK3Tvwo3ft8%2BiJXmxuP7TZBpfVJIvXgBYr%2BnhAKunkPFkOkD2a8XKrOtVKjjNmq%2BTvZ8qMibGcKUhDRF8RyEmUSgQy7JQBz9Jeeku1jApIozNes0MUjZNvNu2yOsfb%2FqhXBuCAWgBeDCogKiVBjqzApROBsWCoMl7JWfRP8fjvQ6uPCdtHrgOCwHteshJqbFI3T58kdRFd7ziQfpmVRZQ%2FsKZhMPlJrFW3e0CwTeliNI3Z%2BYWo1iK%2BdtQ1Oi2JbyUoh9vNmjmMh5NjrvxTsyzeUj6108sBfvd2GB%2F85z52%2Fn7unM7nbfRXOdSHdkMeioSIzxfE0sWV68SeE0ZPxP9UDARzyJ%2F%2BalHsssZ0jvExAN1l2GSpUpswzGhFQDth682lIzQdu4fNOpkArqMvFKYPQpksbA%2FRPxxAzYIkMouAxuU9C%2FfLE3l8W7r7BxR4MMsSzpcoJJEJqEW6OvCjZxCTFot%2BAd5EDY2gU%2BGIB5BSgGjjw2S6i2AddLCv43XVC7%2Br%2F3Rr%2Bk%2BOUlyx5comuiRL2fd7UZ8Nm92lIEpQrSGn%2BzmZ0A%3D&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220615T181911Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIA2TFFNLYJC4FSOMU4%2F20220615%2Feu-west-3%2Fs3%2Faws4_request&X-Amz-Signature=050b4331c5ef2f36497738e1bd1a958afafdb744200770f2a6720ec17f06071c" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/2.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="https://agpimages.s3.eu-west-3.amazonaws.com/oXIyGa4Mn3h4yIkEVPKmLgK7KhH.jpg?response-content-disposition=inline&X-Amz-Security-Token=IQoJb3JpZ2luX2VjEKD%2F%2F%2F%2F%2F%2F%2F%2F%2F%2FwEaCXVzLWVhc3QtMSJHMEUCIAok8fRgNFQu9v6siutjYrAwU%2Bp7tBZY8Ed7djkDtcoUAiEA2UeLRb699iCx%2FASk%2FSDGstOHr0BOwVyXN6xmsDeHotYq7QIIqf%2F%2F%2F%2F%2F%2F%2F%2F%2F%2FARAAGgw3MjgzNDM4NjI4MDIiDNQx0lRqqUbKZz0e7irBAvbbiNvHtJCyyAuW4IeIIYXSq%2BR1WVAclO2Pq7BKKxY6gQPb%2B8Vzim%2Fb%2BoF69wu4M%2BP8z2MHd0qTA4kwSXl3mrBKsm2Icd1grW4weaoRX26xXhE6Ry3hRdjUhq7U6b3FX72NVKozseE110HqVxi2WjMQDiVfaj%2BcsCR9Kx8jX4g2GJ%2BEfbMYb%2BgaRN599hlWQeRpHobrqXHlt4paQX4MBWG9YxWM0v4LGILmRfDUTyATjP%2FCrp%2F9WW9ryIpDstvPRWSzEqNuB2Xl1UcOn%2B328XIIENeszqaNRkgfK3Tvwo3ft8%2BiJXmxuP7TZBpfVJIvXgBYr%2BnhAKunkPFkOkD2a8XKrOtVKjjNmq%2BTvZ8qMibGcKUhDRF8RyEmUSgQy7JQBz9Jeeku1jApIozNes0MUjZNvNu2yOsfb%2FqhXBuCAWgBeDCogKiVBjqzApROBsWCoMl7JWfRP8fjvQ6uPCdtHrgOCwHteshJqbFI3T58kdRFd7ziQfpmVRZQ%2FsKZhMPlJrFW3e0CwTeliNI3Z%2BYWo1iK%2BdtQ1Oi2JbyUoh9vNmjmMh5NjrvxTsyzeUj6108sBfvd2GB%2F85z52%2Fn7unM7nbfRXOdSHdkMeioSIzxfE0sWV68SeE0ZPxP9UDARzyJ%2F%2BalHsssZ0jvExAN1l2GSpUpswzGhFQDth682lIzQdu4fNOpkArqMvFKYPQpksbA%2FRPxxAzYIkMouAxuU9C%2FfLE3l8W7r7BxR4MMsSzpcoJJEJqEW6OvCjZxCTFot%2BAd5EDY2gU%2BGIB5BSgGjjw2S6i2AddLCv43XVC7%2Br%2F3Rr%2Bk%2BOUlyx5comuiRL2fd7UZ8Nm92lIEpQrSGn%2BzmZ0A%3D&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220615T181911Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIA2TFFNLYJC4FSOMU4%2F20220615%2Feu-west-3%2Fs3%2Faws4_request&X-Amz-Signature=050b4331c5ef2f36497738e1bd1a958afafdb744200770f2a6720ec17f06071c" alt=""></a>
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