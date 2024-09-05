jQuery(document).ready(function ($) {

    $.ajax({
        url: myajax.url, // URL для AJAX-запросов
        type: 'POST',
        data: {
            action: 'get_nickname',
            security: myajax.nonce_get_nickname
        },
        success: function (response) {
            if (response.success) {
                let nickname = response.data
                $('#exit_button').text('Выйти (' + nickname + ')')
            }
        }
    });

    $('#exit_button').on('click', function () {

        $.ajax({
            url: myajax.url, // URL для AJAX-запросов
            type: 'POST',
            data: {
                action: 'custom_logout',
                security: myajax.nonce_custom_logout
            },
            success: function (response) {
                if (response.success) {
                    window.location.href = response.data.redirect_url; // Перенаправляем на главную страницу после успешного выхода
                } else {
                    if (confirm('Произошла ошибка при выходе. Хотите попробовать снова?')) {
                        // Повторяем запрос, если пользователь подтвердил действие
                        $('#exit_button').trigger('click');
                    }
                }
            },
            error: function () {
                if (confirm('Произошла ошибка при выходе. Хотите попробовать снова?')) {
                    // Повторяем запрос, если произошла ошибка и пользователь подтвердил действие
                    $('#exit_button').trigger('click');
                }
            }
        });
    });
});
