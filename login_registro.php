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

    <!---------------------------
            ESTILOS CSS          
    ---------------------------->
    <link rel="stylesheet" href="css/reset_general.css">
    <link rel="stylesheet" href="css/reset_secciones.css">

    <!--Login y registro estilos-->
    <link rel="stylesheet" href="css/modulos/login_registro.css">

    <title>Kandor</title>
</head>

<body>
    <main>

        <!---------------------------
                SECCIÓN LOGIN           
        ---------------------------->
        <section class="seccion-login">

            <div class="container-login">


                <!--Lado izquierdo (Contenido del texto)-->
                <div class="cont-text">
                    <div class="text-superior">

                        <img src="assets/logos/Logo_estatico.svg" alt="logo">

                        <h2>Organiza. Planifica. Avanza.</h2>

                        <p>
                            Tu espacio de trabajo para gestionar
                            tareas de forma simple, rápida y eficiente.
                        </p>

                    </div>

                    <!--Para el responsive-->
                    <div class="text-superior-responsive">

                        <img src="assets/logos/Logo_estatico.svg" alt="logo">

                        <h2>¡Hola de nuevo!</h2>

                        <p>
                            inicia sesión para continuar
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
                <div class="cont-formulario">

                    <div class="text-form">

                        <h2>Iniciar sesión</h2>
                        <p>Bienvenido de nuevo, ingresa a tu cuenta.</p>

                    </div>

                    <form action="login.php" method="POST">

                        <label for="correo">Correo electrónico</label>

                        <div class="cont-input">
                            <img src="assets/iconos/iconos login/icono_correo.svg" alt="icono" style="width: 25px;">
                            <input type="email" name="correo" id="correo" placeholder="ejemplo@gmail.com">
                        </div>

                        <label for="contrasena">Contraseña</label>

                        <div class="cont-input">
                            <img src="assets/iconos/iconos login/icono_contraseña.svg" alt="icono" style="width: 25px;">
                            <input type="password" name="contrasena" id="contrasena" placeholder="Ingresa tu contraseña">

                            <!--Iconos de ocultar contraseña-->
                            <img src="assets/iconos/iconos login/icono_mostrar.svg" alt="icono" style="width: 25px;" class="icono-contr">
                            <img src="assets/iconos/iconos login/icono_ocultar.svg" alt="icono" style="width: 25px;" class="icono-contr oculto">
                        </div>

                        <div class="recordarme-recupContr">

                            <div class="recordarme">
                                <input type="checkbox" name="recordarme" id="recordarme">
                                <label for="recordarme">Recordarme</label>
                            </div>

                            <button type="button" id="btn-recup-contraseña" class="btn-recup-contr">¿Olvidaste tu contraseña?</button>

                        </div>

                        <button type="submit" class="btn-iniciar-s" id="btn-iniciar-s">Iniciar sesión</button>
                    </form>

                    <div class="enlace-registro">
                        <p>¿No tienes cuenta? <button class="btn-registro">Regístrate aquí</button></p>
                    </div>

                </div>
            </div>

        </section>


        <!---------------------------
                SECCIÓN RGISTRO           
        ---------------------------->
        <!--Usé las mismas etiquetas y estilos del login y agrego inputs al form-->

        <section class="seccion-registro oculta">

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
                        <p>¿No tienes cuenta? <button class="btn-login">Regístrate aquí</button></p>
                    </div>

                </div>
            </div>

        </section>

    </main>



    <!--Archivos js-->
    <script src="js/login.js" defer></script>
    <script src="js/spa.js" defer></script>
    <script src="js/validar_registro.js"></script>

</body>

</html>