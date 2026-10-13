/*=================================
     SPA PARA LOGIN Y REGISTRO
=================================*/
// const seccionLogin = document.querySelector('.seccion-login');
// const seccionRegistro = document.querySelector('.seccion-registro');

// const btnIrRegistro = document.querySelector('.btn-registro');
// const btnIrLogin = document.querySelector('.btn-login');

// btnIrRegistro.addEventListener('click', (e) => {
//     e.preventDefault();
//     seccionLogin.classList.add('oculta');
//     seccionRegistro.classList.remove('oculta');
// });

// btnIrLogin.addEventListener('click', (e) => {
//     e.preventDefault();
//     seccionRegistro.classList.add('oculta');
//     seccionLogin.classList.remove('oculta');
// });
 
// window.addEventListener('DOMContentLoaded', () => {
//     const urlParams = new URLSearchParams(window.location.search);
//     const tieneError = urlParams.has('error');
//     const seccionParam = urlParams.get('seccion');

//     if (window.location.hash === '#registro' || tieneError || seccionParam === 'registro') {
//         if (seccionRegistro && seccionLogin) {
//             seccionLogin.classList.add('oculta');
//             seccionRegistro.classList.remove('oculta');
//         }
//     } 
// });