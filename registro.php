<?php

$mensajes = [
    "vacio" => "Llena todos los campos.",
    "correo" => "El correo no es válido.",
    "clave_corta" => "La contraseña debe tener mínimo 6 caracteres.",
    "clave_distinta" => "Las contraseñas no coinciden.",
    "existe" => "Ese correo ya está registrado.",
    "bd" => "Ocurrió un problema. Intenta más tarde."
];
$error = $_GET["error"] ?? "";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarme</title>

<!---------------------------
        ESTILOS CSS          
---------------------------->
<link rel="stylesheet" href="/Kandor_Gestor_de_Tareas/css/reset_general.css">
<link rel="stylesheet" href="/Kandor_Gestor_de_Tareas/css/reset_secciones.css">
<link rel="stylesheet" href="/Kandor_Gestor_de_Tareas/css/modulos/login_registro.css">

</head>

<body>

    <main>
        <!---------------------------
                SECCIÓN RGISTRO           
        ---------------------------->
        <!--Usé las mismas etiquetas y estilos del login y agrego inputs al form-->

        <section class="seccion-registro">

            <div class="container-login">


                <!--Lado izquierdo (Contenido del texto)-->
                <div class="cont-text">
                    <div class="text-superior">

                        <img src="assets/logos/Logo_estatico.svg" alt="logo">

                        <h2>Únete y comienza</h2>

                        <p>
                            Crea tu cuenta y empieza a organizar tus
                            tareas hoy mismo.
                        </p>

                    </div>


                    <!--Para el responsive-->
                    <div class="text-superior-responsive">

                        <img src="assets/logos/Logo_estatico.svg" alt="logo">

                        <h2>¡Crea tu cuenta!</h2>

                        <p>
                            Únete y comienza a organizar tus tareas
                        </p>

                    </div>

                    <div class="elements-inferiores">

                        <div class="iconos">
                            <img src="assets/iconos/iconos login/icono_organiz_v2.svg" alt="icono" class="icon1">
                            <p>Organiza tus tareas</p>
                        </div>

                        <div class="iconos">
                            <img src="assets/iconos/iconos login/icono_grupo_v2.svg" alt="icono" class="icon2">
                            <p>Trabaja en equipo</p>
                        </div>

                        <div class="iconos">
                            <img src="assets/iconos/iconos login/icono_grafica_v2.svg" alt="icono" class="icon3">
                            <p>Aunmenta tu productividad</p>
                        </div>

                    </div>
                </div>


                <!--Lado derecho (Contenido del formulario)-->
                <div class="cont-formulario registro">

                    <div class="text-form">

                        <h2>Crear cuenta</h2>
                        <p>Completa la información para registrarte.</p>

                    </div>

                    <form id="form_registro" action="controllers/registro_controllers.php" method="POST">

                        <label for="nombre">Nombre completo</label>

                        <div class="cont-input">
                            <img src="assets/iconos/iconos login/icono_user.svg" alt="icono" style="width: 25px;">
                            <input type="text" name="nombre" id="nombre" placeholder="Tu nombre">
                        </div>

                        <label for="correo">Correo electrónico</label>

                        <div class="cont-input">
                            <img src="assets/iconos/iconos login/icono_correo.svg" alt="icono" style="width: 25px;">
                            <input type="email" name="correo" id="correo" placeholder="ejemplo@gmail.com">
                        </div>

                        <label for="contrasena">Contraseña</label>

                        <div class="cont-input">
                            <img src="assets/iconos/iconos login/icono_user.svg" alt="icono" style="width: 25px;">
                            <input type="password" name="contrasena" id="contrasena" placeholder="Ingresa una contraseña">

                            <!--Iconos de ocultar contraseña-->
                            <img src="assets/iconos/iconos login/icono_mostrar.svg" alt="icono" style="width: 25px;" class="icono-contr">
                            <img src="assets/iconos/iconos login/icono_ocultar.svg" alt="icono" style="width: 25px;" class="icono-contr oculto">
                        </div>

                        <label for="contrasena">Confirmar contraseña</label>

                        <div class="cont-input">
                            <img src="assets/iconos/iconos login/icono_user.svg" alt="icono" style="width: 25px;">
                            <input type="password" name="contrasena_confirm" id="contrasena_confirm" placeholder="Confirma tu contraseña">

                            <!--Iconos de ocultar contraseña-->
                            <img src="assets/iconos/iconos login/icono_mostrar.svg" alt="icono" style="width: 25px;" class="icono-contr">
                            <img src="assets/iconos/iconos login/icono_ocultar.svg" alt="icono" style="width: 25px;" class="icono-contr oculto">
                        </div>

                        <p id="mensaje" class="error"></p>

                        <button type="submit" class="btn-iniciar-s registro" id="btn-iniciar-s">Registrarse</button>
                    </form>

                    <div class="enlace-registro">
                        <p>¿Ya tienes cuenta? <a href="login.php" style="color: #1683F5;">Inicia sesión</a></p>
                    </div>

                    <p id="mensaje" class="error">
                        <?php echo $mensajes[$error] ?? ""; ?>
                    </p>

                </div>
            </div>

        </section>

    </main>



    <!--Archivos js-->
    <script src="js/login.js" defer></script>
    <script src="js/spa.js" defer></script>
    <script src="js/validar_registro.js"></script>
    <script src="js/validar_login.js"></script>

</body>

</html>