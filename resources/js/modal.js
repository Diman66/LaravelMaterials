import * as bootstrap from 'bootstrap'

window.addEventListener('DOMContentLoaded', function () {
    // элемент, содержащий контент модального окна (например, имеющий id="modal")
    const elemModal = document.querySelector('#exampleModalToggle');
    // активируем элемент в качестве модального окна с параметрами по умолчанию
    const modal = new bootstrap.Modal(elemModal);
    // откроем модальное окно
    modal.show();
});