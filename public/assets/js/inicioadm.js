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

    setupFormSubmitAlert('Crear_Categoria', '¿Crear una Categoria?',
        '¿Estás seguro de que deseas crear una nueva categoria?',
        'Sí, crear categoria', 'Categoria');
    setupFormSubmitAlert('Crear_usuario', '¿Crear un nuevo usuario?',
        '¿Estás seguro de que deseas crear un nuevo usuario?',
        'Sí, crear usuario', 'Usuario');
});

// alerta de matenimiento ya creado
document.addEventListener('DOMContentLoaded', function() {
    const createCategoryButton = document.getElementById('create_category');

    createCategoryButton.addEventListener('click', function(event) {
        event.preventDefault(); // Prevenir el envío del formulario inmediato

        // Seleccionar el formulario y obtener los valores
        const form = document.getElementById('Crear_Categoria');
        const id_codigo = document.getElementById('id_codigo').value;
        const nombre = document.getElementById('nombre').value;

        // Validar los campos
        let errores = [];

        if (!id_codigo) {
            errores.push('El código de categoría es obligatorio.');
        }

        if (!nombre) {
            errores.push('El nombre de la categoría es obligatorio.');
        }

        // Mostrar la alerta si hay errores
        if (errores.length > 0) {
            const alerta = document.getElementById('alerta_errores') || document.createElement('div');
            alerta.id = 'alerta_errores';
            alerta.className = 'alert alert-danger';
            alerta.innerHTML = '<ul>' + errores.map(error => `<li>${error}</li>`).join('') + '</ul>';
            form.insertBefore(alerta, form.firstChild);
        } else {
            // Si no hay errores, mostrar SweetAlert para confirmar
            Swal.fire({
                title: '¿Crear una Categoria?',
                text: '¿Estás seguro de que deseas crear una nueva categoria?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#e67e22',
                cancelButtonColor: '#c0392b',
                confirmButtonText: 'Sí, crear categoria',
                cancelButtonText: 'Cancelar',
                backdrop: `
                    rgba(52,58,64,0.8)
                    url("https://images.unsplash.com/photo-1599837575449-4d9aefc33ec3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80")
                    center no-repeat
                `
            }).then((result) => {
                if (result.isConfirmed) {
                    // Enviar la solicitud usando fetch
                    fetch(form.action, {
                        method: 'POST',
                        body: new FormData(form),
                        headers: {
                            'Accept': 'application/json'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.errors) {
                            // Mostrar la alerta si hay errores
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'El código de categoría ya existe. Por favor, introduce uno diferente.',
                                confirmButtonColor: '#c0392b',
                                confirmButtonText: 'Volver al formulario',
                            });
                        } else {
                            // Mostrar la alerta de éxito y redirigir
                            sessionStorage.setItem('Categoria', 'true');
                            form.submit();
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'El código de categoría ya existe. Por favor, introduce uno diferente..',
                            confirmButtonColor: '#c0392b',
                            confirmButtonText: 'Volver al formulario',
                        });
                    });
                }
            });
        }
    });

    const successMessage = sessionStorage.getItem('Categoria');
    if (successMessage) {
        Swal.fire({
            icon: 'success',
            title: '¡Categoria creada!',
            text: 'Categoria creada exitosamente.',
            confirmButtonColor: '#27ae60',
            confirmButtonText: 'Continuar',
            backdrop: `
                rgba(39,174,96,0.8)
                url("https://images.unsplash.com/photo-1609629010859-037ae866b7be?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80")
                center no-repeat
            `
        });
        sessionStorage.removeItem('Categoria');
    }
});

