jQuery(document).ready(function ($) {
    // Функция для инициализации select2 с общими параметрами
    function initializeSelect2(selector, placeholder, useFormatMethods = false) {
        $(selector).select2({
            templateResult: useFormatMethods ? formatMethods : undefined,
            templateSelection: useFormatMethods ? formatMethods : undefined,
            placeholder: placeholder,
            allowClear: true, // Позволяет очистить выбор
            width: '100%'
        });

        // Обработчик события select2:opening
        $(selector).on('select2:opening', function () {
            $(this).find('option[value="none"]').remove();
        });

        // Установка placeholder
        $(selector).val(null).trigger('change');
    }

    // Функция для форматирования опций select2
    function formatMethods(option) {
        if (!option.id) {
            return option.text;
        }
        var image = $(option.element).data('image');
        var $option = $(
            '<span><img src="' + image + '" class="img-flag" style="width: 20px; height: 20px; margin-right: 10px;" /> ' + option.text + '</span>'
        );
        return $option;
    }

    // Инициализация select2 для всех селекторов
    initializeSelect2('#mySelect', 'Способы оплаты', true);
    initializeSelect2('#methods', '', true);
    initializeSelect2('#methods2', '', true);
    initializeSelect2('#statuses', 'Статусы');
    initializeSelect2('#statuses_req', 'Статусы');
    initializeSelect2('#currencies', 'Валюты');
    initializeSelect2('#currencies2', '');
    initializeSelect2('#currencies3', '');
    initializeSelect2('#type', 'Тип оплаты');
    initializeSelect2('#type2', '');
    initializeSelect2('#type3', '');
    initializeSelect2('#devices', 'Устройства');
    initializeSelect2('#devices2', '');
    initializeSelect2('#devices3', '');
    initializeSelect2('#groups2', '');
    initializeSelect2('#groups3', '');

    // Обработчик для кнопки сброса
    $('#reset-button').click(function () {
        location.reload(); // Обновление страницы
    });



});


