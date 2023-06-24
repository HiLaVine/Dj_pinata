<?php
$user = "root";
$pass = "";
$host = "localhost";
//conectamos a la base de datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al input del formulario
if (!$connection) {
    echo "No se ha podido conectar con el servidor" . mysql_error();
}

$datab = "dj_bd";

//indicacmos seleccionar a la bd
$db = mysqli_select_db($connection, $datab);

if (!$db) {
    echo "No se ha podido encontrar la Tabla";
}
?>