/*=================================
   OCULTAR Y MOSTRAR CONTRASEÑA 
=================================*/
const inputContrasena = document.getElementById('contrasena');
const iconoMostrar = document.querySelector('.cont-input img.icono-contr:not(.oculto)');

const iconosOjo = document.querySelectorAll('.cont-input .icono-contr');


const btnMostrar = iconosOjo[0];
const btnOcultar = iconosOjo[1];


function togglePassword() {
  const esPassword = inputContrasena.type === 'password';
  
  if (esPassword) {
    inputContrasena.type = 'text';
    btnMostrar.classList.add('oculto');    // Ocultamos el de mostrar
    btnOcultar.classList.remove('oculto'); // Mostramos el de ocultar
  } else {
    inputContrasena.type = 'password';
    btnOcultar.classList.add('oculto');    // Ocultamos el de ocultar
    btnMostrar.classList.remove('oculto'); // Mostramos el de mostrar
  }
}

btnMostrar.addEventListener('click', togglePassword);
btnOcultar.addEventListener('click', togglePassword);