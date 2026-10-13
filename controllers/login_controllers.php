<?php 

session_start();
require "../config/conexion.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../login.php");
    exit;
}

$correo = trim($_POST ["correo"] ?? "");
$clave = $_POST["contrasena"] ?? "";

if ($correo === "" || $clave === "") {
    header("Location: ../login.php?error=vacio2");
    exit;
}


try {
    //Buscar a ala persona por su correo
    $consulta = $conexion->prepare(
        "SELECT id_usuario, nombre, contrasena FROM usuario WHERE correo = ?"
    );

    $consulta -> bind_param("s", $correo);
    $consulta -> execute();
    $resultado = $consulta ->get_result();
    $usuario = $resultado -> fetch_assoc(); //false si no existe

    //¿Existe y la contraseña coinside con el hash guardado?
    if ($usuario && password_verify($clave, $usuario["contrasena"])) {
        session_regenerate_id(true); //nueva (pulsera)
        $_SESSION["id_usuario"] = $usuario["id_usuario"];
        $_SESSION["nombre"] = $usuario["nombre"];
        header("Location: ../index.php");
        exit;
    }

    //Mismo mensaje si falla el correo o la contraseña
    header("Location: ../login.php?error=incorrecto");
    exit;
} catch(mysqli_sql_exception $e) {
    header("Location: ../login.php?error=db");
}

?>