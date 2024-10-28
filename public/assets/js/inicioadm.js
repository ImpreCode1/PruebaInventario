document.addEventListener('DOMContentLoaded', function () {
    // Aquí irían los datos que vendrían de la base de datos
    const activo = {
        codigo: "S20-00001",
        nombre: "Silla",
        area: "Ti - Infraestructura",
        estado: "Asignado",
        imagen: "imagen"  // Este sería el enlace a la imagen
    };

    // Insertamos los valores en los elementos HTML
    document.getElementById('codigo').textContent = activo.codigo;
    document.getElementById('nombre').textContent = activo.nombre;
    document.getElementById('area').textContent = activo.area;
    document.getElementById('estado').textContent = activo.estado;

    // Cambiamos la imagen si es necesario
    document.querySelector('.card-image').url = activo.imagen;
});
const openModal = document.querySelector('.Crear__Categoria');
const modal = document.querySelector('.modal');


openModal.addEventListener('click', (e) => {
    e.preventDefault();
    modal.classList.add('modal--show');
});

// Cerrar la modal al hacer clic en la "X" mirarlo mas adelante al momento de comenzar a insertar usuarios,
//por que si lo aplico no me deja abrir la modal de registrar administrador.
// const closeButton = modal.querySelector('.close-button');
// closeButton.addEventListener('click', () => {
//     modal.classList.remove('modal--show');
// });




//  inicio funcion para agregar admin o super admin
const openModall = document.querySelector('.Registrador_Usuarios');
const registroadminmod = document.querySelector('.registroadminmod');
const closeModalButton = document.querySelector('.cerrar_boton');

// Abrir modal
openModall.addEventListener('click', (e) => {
    e.preventDefault();
    registroadminmod.classList.add('imp-mod');
});

// Cerrar modal  mirar mas adelante para poder aplicaro
       closeModalButton.addEventListener('click', () => {
       registroadminmod.classList.remove('imp-mod');
 });
