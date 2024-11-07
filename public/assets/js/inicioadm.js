
const openModal = document.querySelector('.Crear__Categoria');
const modal = document.querySelector('.modal');


openModal.addEventListener('click', (e) => {
    e.preventDefault();
    modal.classList.add('modal--show');
});






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
       registroadminmod.classList.remove('.cerrar_boton');
 });
 document.getElementById('miTabla').addEventListener('click', function(event) {
    if (event.target.closest('.botoninfactivo')) {
        const button = event.target.closest('.botoninfactivo');
        const id = button.getAttribute('data-id');
        console.log(id); // Añade esta línea para depurar
        window.location.href = `informacionactiv?id=${id}`;
    }
});
// window.Swal = require ('sweetalert2');


document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('Crear_usuario');
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Evitar el envío normal del formulario
        Swal.fire({
            title: '¿Crear un nuevo usuario?',
            text: '¿Estás seguro de que deseas crear un nuevo usuario?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#e67e22',
            cancelButtonColor: '#c0392b',
            confirmButtonText: 'Sí, crear usuario',
            cancelButtonText: 'Cancelar',
            backdrop: `
                rgba(52,58,64,0.8)
                url("https://images.unsplash.com/photo-1599837575449-
                4d9aefc33ec3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGV
                ufDB8fHx8&auto=format&fit=crop&w=1470&q=80")
                center
                no-repeat
            `
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit(); // Enviar el formulario si el usuario confirma
            }
        });
    });

    // Simulación de manejo de sesión para mostrar alerta de éxito
    const successMessage = "{{ session('success') }}"; // Asegúrate de que esto es correcto en tu backend
    if (successMessage) {
        Swal.fire({
            icon: 'success',
            title: '¡Usuario creado!',
            text: successMessage,
            confirmButtonColor: '#27ae60',
            confirmButtonText: 'Continuar',
            backdrop: `
                rgba(39,174,96,0.8)
                url("https://images.unsplash.com/photo-1609629010859-037ae866b7be?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80")
                center
                no-repeat
            `
        });
    }
});
