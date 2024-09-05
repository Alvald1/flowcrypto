
// Находим кнопку закрытия внутри модального окна



document.addEventListener('DOMContentLoaded', function () {//устройства
    // Находим кнопку, открывающую модальное окно
    const openButton = document.querySelector('.btn.btn-outline-dark.btn-sm.rounded-pill.text-capitalize');
    const closeButton = document.querySelector('.btn-close_devices');
    const closeButton2 = document.querySelector('.btn-close_devices2');
    // Находим модальное окно
    const modal = document.getElementById('requisites_devices');



    // Функция для открытия модального окна
    function openModal() {
        modal.classList.remove('fade');
        modal.classList.add('show');
        modal.style.display = 'block';
        modal.setAttribute('aria-modal', 'true');
        modal.setAttribute('role', 'dialog');
        modal.setAttribute('aria-hidden', 'false');
        document.querySelector('.modal-backdrop.fade.show').style.visibility = 'visible';
    }

    // Функция для закрытия модального окна
    function closeModal() {
        modal.classList.remove('show');
        modal.classList.add('fade');
        modal.style.display = 'none';
        modal.removeAttribute('aria-modal');
        modal.removeAttribute('role');
        modal.setAttribute('aria-hidden', 'true');
        document.querySelector('.modal-backdrop.fade.show').style.visibility = 'hidden';
    }

    // Обработчик события нажатия на кнопку открытия
    openButton.addEventListener('click', openModal);

    // Обработчик события нажатия на кнопку закрытия
    closeButton.addEventListener('click', closeModal);
    // Обработчик события нажатия на кнопку закрытия
    closeButton2.addEventListener('click', closeModal);

    // Закрытие модального окна при клике на любое место вне модального окна
    modal.addEventListener('click', function (event) {
        if (event.target === modal) {
            closeModal();
        }
    });
});


document.addEventListener('DOMContentLoaded', function () {//группы
    // Находим кнопку, открывающую модальное окно
    const openButton = document.querySelector('.btn.btn-outline-dark.btn-sm.ms-2.rounded-pill.text-capitalize');
    const closeButton = document.querySelector('.btn-close_group');
    const closeButton2 = document.querySelector('.btn-close_group2');
    // Находим модальное окно
    const modal = document.getElementById('requisites_group');

    // Функция для открытия модального окна
    function openModal() {
        modal.classList.remove('fade');
        modal.classList.add('show');
        modal.style.display = 'block';
        modal.setAttribute('aria-modal', 'true');
        modal.setAttribute('role', 'dialog');
        modal.setAttribute('aria-hidden', 'false');
        document.querySelector('.modal-backdrop.fade.show').style.visibility = 'visible';
    }

    // Функция для закрытия модального окна
    function closeModal() {
        modal.classList.remove('show');
        modal.classList.add('fade');
        modal.style.display = 'none';
        modal.removeAttribute('aria-modal');
        modal.removeAttribute('role');
        modal.setAttribute('aria-hidden', 'true');
        document.querySelector('.modal-backdrop.fade.show').style.visibility = 'hidden';
    }

    // Обработчик события нажатия на кнопку открытия
    openButton.addEventListener('click', openModal);

    // Обработчик события нажатия на кнопку закрытия
    closeButton.addEventListener('click', closeModal);
    // Обработчик события нажатия на кнопку закрытия
    closeButton2.addEventListener('click', closeModal);

    // Закрытие модального окна при клике на любое место вне модального окна
    modal.addEventListener('click', function (event) {
        if (event.target === modal) {
            closeModal();
        }
    });
});


document.addEventListener('DOMContentLoaded', function () {//создать
    // Находим кнопку, открывающую модальное окно
    const openButton = document.querySelector('.btn.btn-outline-dark.btn-sm.rounded-pill.float-end.text-capitalize');

    // Находим модальное окно
    const modal = document.getElementById('requisites_create');
    const closeButton = document.querySelector('.btn-close_create');
    const closeButton2 = document.querySelector('.btn-close_create2');

    // Функция для открытия модального окна
    function openModal() {
        modal.classList.remove('fade');
        modal.classList.add('show');
        modal.style.display = 'block';
        modal.setAttribute('aria-modal', 'true');
        modal.setAttribute('role', 'dialog');
        modal.setAttribute('aria-hidden', 'false');
        document.querySelector('.modal-backdrop.fade.show').style.visibility = 'visible';
    }

    // Функция для закрытия модального окна
    function closeModal() {
        modal.classList.remove('show');
        modal.classList.add('fade');
        modal.style.display = 'none';
        modal.removeAttribute('aria-modal');
        modal.removeAttribute('role');
        modal.setAttribute('aria-hidden', 'true');
        document.querySelector('.modal-backdrop.fade.show').style.visibility = 'hidden';
        document.querySelector('#currencies2').nextElementSibling.querySelector('.select2-selection').style.border = '';
        document.querySelector('#type2').nextElementSibling.querySelector('.select2-selection').style.border = '';
        document.querySelector('#methods').nextElementSibling.querySelector('.select2-selection').style.border = '';
        document.querySelector('#requisites').style.border = '';
        document.querySelector('#holderName').style.border = '';
        document.querySelector('#dayTradesSumLimit').style.border = '';
        document.querySelector('#monthTradesSumLimit').style.border = '';


    }

    // Обработчик события нажатия на кнопку открытия
    openButton.addEventListener('click', openModal);

    // Обработчик события нажатия на кнопку закрытия
    closeButton.addEventListener('click', closeModal);
    // Обработчик события нажатия на кнопку закрытия
    closeButton2.addEventListener('click', closeModal);

    // Закрытие модального окна при клике на любое место вне модального окна
    modal.addEventListener('click', function (event) {
        if (event.target === modal) {
            closeModal();
        }
    });






});




