<?php

require "../config/conexion.php";

//Solo se aceptan visitas cque tengan un formulario POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
 header("Location: ../login_registro.php");
 exit;
}

// Primero recibir los datos
$nombre = trim($_POST ["nombre"] ?? "");
$correo = trim($_POST ["correo"] ?? "");
$clave = ($_POST ["contrasena"] ?? "");
$confirm_clave = ($_POST ["contrasena_confirm"] ?? "");

// 2 validamos nuevamente pero desde el servidor
if ($nombre === "" || $correo === "" || $clave === "" || $confirm_clave === "") {
    header ("Location: ../login_registro.php?error=vacio&seccion=registro"); exit;
}

if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
 header("Location: ../login_registro.php?error=correo"); exit;
}

if (strlen($clave) < 6) {
    header("Location: ../login_registro.php?error=clave_corta"); exit;
}

if ($clave !== $confirm_clave){
    header("Location: ../login_registro.php?error=clave_distinta"); exit;
}


try {
    // 3) ¿Ya existe ese correo?
    $buscar = $conexion->prepare("SELECT id_usuario FROM usuario WHERE correo = ?");
    $buscar->bind_param("s", $correo);
    $buscar->execute();
    $buscar->store_result();

    if ($buscar->num_rows > 0) {
        header("Location: ../registro.php?error=existe");
        exit;
    }

    $buscar->close();




//4 convertir la contraseña en un hash secreto
$hash = password_hash($clave, PASSWORD_DEFAULT);


//5 guardar en la base de datos
$guardar = $conexion -> prepare (
    "INSERT INTO usuario (nombre, correo, contrasena) VALUES (?, ?, ?)"
);

$guardar -> bind_param("sss", $nombre, $correo, $hash);
$guardar -> execute();
$guardar -> close();

//6 si todo salió bien, mandamos al login
header("Location: ../login_registro.php?ok=registrado"); exit; 

} catch (mysqli_sql_exception $e) {
    header("Location: ../login_registro.php?error=bd"); exit;
}

?>