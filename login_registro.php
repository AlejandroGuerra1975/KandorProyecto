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

    <!--Login estilos-->
    <link rel="stylesheet" href="css/modulos/login.css">

    <!--Archivos js-->
    <script src="js/login.js" defer></script>

    <title>Kandor</title>
</head>

<body>
    <main>

        <!---------------------------
                SECCIÓN LOGIN           
        ---------------------------->
        <section class="seccion seccion-login">

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
                        <p>¿No tienes cuenta? <a href="#">Regístrate aquí</a></p>
                    </div>

                </div>
            </div>

        </section>

    </main>
</body>

</html>