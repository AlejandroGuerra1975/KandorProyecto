<?php 

use Dba\Connection;

$servidor = "localhost";
$usuario = "root";
$clave_db = "";
$base = "kandor_db";

//si hay un error que php lance una exepción que podamos atrapar
mysqli_report(MYSQLI_REPORT_ERROR);

try {
    $conexion = new mysqli ($servidor, $usuario, $clave_db, $base);
    $conexion ->  set_charset("utf8mb4"); //esto es para las tildes y ñ
} catch (mysqli_sql_exception $e) {
    die ("No se pudo conectar a la base de datos.");
}

?>