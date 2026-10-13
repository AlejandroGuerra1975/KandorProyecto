const form_login = document.getElementById("form-login");
const mensaje_login = document.getElementById("mensaje");

form_login.addEventListener("submit", function (evento) {
    const correo = document.getElementById("correo").value.trim();
    const clave = document.getElementById("contrasena").value;

    mensaje_login.textContent = "";

    if (correo === "" || clave === "") {
        evento.preventDefault();
        mensaje_login.textContent = "Escribe tu correo y tu contraseña"
    }
})