document.addEventListener('DOMContentLoaded', () => {
    const openModal = document.querySelector('.Crear__Categoria');
    const modal = document.querySelector('.modal');
    const openModall = document.querySelector('.Registrador_Usuarios');
    const registroadminmod = document.querySelector('.registroadminmod');
    const closeModalButton = document.querySelector('.cerrar_boton');

    // Abrir modal para crear categoría
    openModal.addEventListener('click', (e) => {
        e.preventDefault();
        modal.classList.add('modal--show');
    });

    // Abrir modal para registrar usuario
    openModall.addEventListener('click', (e) => {
        e.preventDefault();
        registroadminmod.classList.add('imp-mod');
    });

    // Cerrar modal
    closeModalButton.addEventListener('click', () => {
        registroadminmod.classList.remove('imp-mod');
    });

    const setupFormSubmitAlert = (formId, title, text, confirmText, successMessageKey) => {
        const form = document.getElementById(formId);
        form.addEventListener('submit', (event) => {
            event.preventDefault();
            Swal.fire({
                title: title,
                text: text,
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#e67e22',
                cancelButtonColor: '#c0392b',
                confirmButtonText: confirmText,
                cancelButtonText: 'Cancelar',
                backdrop: `
                    rgba(52,58,64,0.8)
                    url("https://images.unsplash.com/photo-1599837575449-4d9aefc33ec3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80")
                    center no-repeat
                `
            }).then((result) => {
                if (result.isConfirmed) {
                    sessionStorage.setItem(successMessageKey, 'true');
                    form.submit();
                }
            });
        });

        const successMessage = sessionStorage.getItem(successMessageKey);
        if (successMessage) {
            Swal.fire({
                icon: 'success',
                title: `¡${successMessageKey} creada!`,
                text: successMessageKey,
                confirmButtonColor: '#27ae60',
                confirmButtonText: 'Continuar',
                backdrop: `
                    rgba(39,174,96,0.8)
                    url("https://images.unsplash.com/photo-1609629010859-037ae866b7be?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80")
                    center no-repeat
                `
            });
            sessionStorage.removeItem(successMessageKey);
        }
    };

    setupFormSubmitAlert('Crear_Categoria', '¿Crear una Categoria?', '¿Estás seguro de que deseas crear una nueva categoria?', 'Sí, crear categoria', 'Categoria');
    setupFormSubmitAlert('Crear_usuario', '¿Crear un nuevo usuario?', '¿Estás seguro de que deseas crear un nuevo usuario?', 'Sí, crear usuario', 'Usuario');
});
