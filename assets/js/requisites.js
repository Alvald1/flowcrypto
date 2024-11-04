document.addEventListener('DOMContentLoaded', function () {
    // Общая функция для открытия модального окна
    function openModal(modal) {
        modal.classList.remove('fade');
        modal.classList.add('show');
        modal.style.display = 'block';
        modal.setAttribute('aria-modal', 'true');
        modal.setAttribute('role', 'dialog');
        modal.setAttribute('aria-hidden', 'false');
        document.querySelector('.modal-backdrop.fade.show').style.visibility = 'visible';
    }

    // Общая функция для закрытия модального окна
    function closeModal(modal) {
        modal.classList.remove('show');
        modal.classList.add('fade');
        modal.style.display = 'none';
        modal.removeAttribute('aria-modal');
        modal.removeAttribute('role');
        modal.setAttribute('aria-hidden', 'true');
        document.querySelector('.modal-backdrop.fade.show').style.visibility = 'hidden';

        // Сброс стилей ошибок в модальном окне "создать"
        if (modal.id === 'requisites_create') {
            const fields = ['#currencies2', '#type2', '#methods', '#requisites', '#holderName', '#dayTradesSumLimit', '#monthTradesSumLimit'];
            fields.forEach(selector => {
                const element = document.querySelector(selector);
                if (element) element.nextElementSibling.querySelector('.select2-selection').style.border = '';
            });
        }
    }

    // Универсальная функция для инициализации модальных окон
    function initModal(openSelector, closeSelectors, modalId) {
        const openButton = document.querySelector(openSelector);
        const modal = document.getElementById(modalId);

        if (!openButton || !modal) return;

        // Устанавливаем обработчики для кнопок закрытия
        openButton.addEventListener('click', () => openModal(modal));

        closeSelectors.forEach(selector => {
            const closeButton = document.querySelector(selector);
            if (closeButton) closeButton.addEventListener('click', () => closeModal(modal));
        });

        // Закрытие при клике вне модального окна
        modal.addEventListener('click', function (event) {
            if (event.target === modal) closeModal(modal);
        });
    }

    // Инициализация всех модальных окон
    initModal('.btn.btn-outline-dark.btn-sm.rounded-pill.text-capitalize', ['.btn-close_devices', '.btn-close_devices2'], 'requisites_devices');
    initModal('.btn.btn-outline-dark.btn-sm.ms-2.rounded-pill.text-capitalize', ['.btn-close_group', '.btn-close_group2'], 'requisites_group');
    initModal('.btn.btn-outline-dark.btn-sm.rounded-pill.float-end.text-capitalize', ['.btn-close_create', '.btn-close_create2'], 'requisites_create');
    initModal('.btn-open_qr', ['.btn-close_qr', '.btn-close_qr2'], 'qr_code_modal');

});
