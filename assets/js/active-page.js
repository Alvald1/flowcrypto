jQuery(document).ready(function ($) {
    // Получаем текущий URL
    var currentPath = window.location.pathname;

    if (currentPath.endsWith('/') && currentPath.length > 1) {
        currentPath = currentPath.slice(0, -1);
    }

    // Итерируем по всем ссылкам в навигации
    $('.nav-link').each(function () {
        var linkPath = $(this).attr('href');

        // Сравниваем текущий путь с путем ссылки
        if (currentPath === linkPath) {
            $(this).addClass('active');
        }
    });




});