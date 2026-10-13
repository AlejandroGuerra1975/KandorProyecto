const formulario = document.getElementById("form_registro");
const mensaje = document.getElementById("mensaje");

formulario.addEventListener("submit", function (evento){
    const nombre = document.getElementById("nombre").value.trim();
    const correo = document.getElementById("correo").value.trim();
    const clave = document.getElementById("contrasena").value;
    const confirm_clave = document.getElementById("contrasena_confirm").value;

    mensaje.textContent =""; //esto borra mensajes viejos

    if (nombre === "" || correo === "" || clave === "" || confirm_clave === ""){
        evento.preventDefault(); //Esto significa, Alto!! no envies el formulario (frena el envio)
        mensaje.textContent = "Llena todos los campos.";
        return; //Termina la función
    }

    const patronCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!patronCorreo.test(correo)) {
        evento.preventDefault();
        mensaje.textContent = "Escribe un correo válido.";
        return;
    }

    if (clave.length < 6){ //esto cuenta las letras si son menos de seis muestra el mensaje
        evento.preventDefault();
        mensaje.textContent = "La contraseña debe tener mínimo 6 caracteres.";
        return;
    }

    if (clave !== confirm_clave){
        evento.preventDefault();
        mensaje.textContent = "Las contraseñas no coinciden.";
        return;
    }
})