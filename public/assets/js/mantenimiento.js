document.addEventListener('DOMContentLoaded', () => {
    const openModal = document.querySelector('.Crear__Mantenimiento');
    const modal = document.querySelector('.modal');

    const closeModalButton = document.querySelector('.cerrar_boton');

    // Abrir modal para crear mantenimiento
    openModal.addEventListener('click', (e) => {
        e.preventDefault();
        modal.classList.add('modal--show');
    });
})
