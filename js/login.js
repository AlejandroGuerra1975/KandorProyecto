
/*=================================
   OCULTAR Y MOSTRAR CONTRASEÑA 
=================================*/
document.querySelectorAll('.cont-input').forEach(contenedor => {
  const input = contenedor.querySelector('input[type="password"], input[type="text"]');
  const iconoMostrar = contenedor.querySelector('.icono-contr:not(.oculto)');
  const iconoOcultar = contenedor.querySelector('.icono-contr.oculto');

  if (input && iconoMostrar && iconoOcultar) {
    const togglePassword = () => {
      const esPassword = input.type === 'password';
      input.type = esPassword ? 'text' : 'password';
      iconoMostrar.classList.toggle('oculto', esPassword);
      iconoOcultar.classList.toggle('oculto', !esPassword);
    };

    iconoMostrar.addEventListener('click', togglePassword);
    iconoOcultar.addEventListener('click', togglePassword);
  }
});