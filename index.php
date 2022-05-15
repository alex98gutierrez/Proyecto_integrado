<?php

$connect=mysqli_init(); mysqli_ssl_set($connect, NULL, NULL, NULL, NULL, NULL); mysqli_real_connect($connect, "epdlv.mysql.database.azure.com", "alejandro@epdlv", "1qaz@WSX", "prueba", 3306);
if ($connect->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $connect->connect_errno . ") " . $connect->connect_error;
}


echo "<!DOCTYPE html>";
echo "<html lang='es'>";
	echo "<head>";
		echo "<meta charset='UTF-8'>";
	  	#echo "<link rel="stylesheet" href="styles.css">";

	  	echo "<title>El planeta de los videos</title>";

	echo "</head>";

	echo "<body>";

	echo "<h1>This is a heading</h1>";

		echo "<p>This is a paragraph.</p>";

	echo "<header>";

        echo "<h2 class='logo'>El planeta de los videos";

	echo "</header>";

        echo "<nav>";
            echo "<a href=''>Inicio</a>";
            echo "<a href=''>Películas</a>";
            echo "<a href=''>Series</a>";
            echo "<a href=''>Últimos estrenos</a>";
            echo "";
        echo "</nav>";

	echo "<p>CAMBIOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOS</p>";
        
    echo "<p>Holaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>";

	echo "</body>";
echo "</html>";


?>
