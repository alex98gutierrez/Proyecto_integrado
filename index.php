<?php

$connect=mysqli_init(); mysqli_ssl_set($connect, NULL, NULL, NULL, NULL, NULL); mysqli_real_connect($connect, "epdlv.mysql.database.azure.com", "alejandro@epdlv", "1qaz@WSX", "prueba", 3306);
if ($connect->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $connect->connect_errno . ") " . $connect->connect_error;
}


    echo "<p>Holaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>";

?>
