jQuery(document).ready(function ($) {
    function showCustomAlert(uuid) {
        // Установить значения полей
        document.getElementById('uuidField').value = uuid;

        // Установить текст сообщения
        document.getElementById('alertMessage').innerText = 'Your details:';

        // Показать окно алерта
        document.getElementById('customAlert').style.display = 'flex';
    }

    // Закрыть алерт при нажатии на кнопку
    document.getElementById('closeAlert').addEventListener('click', function () {
        document.getElementById('customAlert').style.display = 'none';
    });

    $.ajax({
        url: myajax.url,
        type: 'POST',
        data: {
            action: 'check_status',
            security: myajax.nonce_check_status
        },
        success: function (response) {
            if (response.success) {
                if (response.data === 'OK')
                    $('#automatic').text('Автоматика подключена')
                else if (response.data === 'WAIT') {
                    $('#automatic').text('Ожидание тестового сообщения')
                } else {
                    $('#automatic').text('Автоматика отключена')
                }
            } else {
                console.error('Error updating userMeta:', response.data);
            }
        },
        error: function (xhr, status, error) {
            console.error('AJAX Error:', status, error);
        }
    });


    $('#connect').on('click', function () {
        $.ajax({
            url: myajax.url,
            type: 'POST',
            data: {
                action: 'generate_uuid',
                security: myajax.nonce_generate_uuid
            },
            success: function (response) {
                if (response.success) {
                    uuid = response.data['uuid']
                    showCustomAlert(uuid)
                    $('#automatic').text('Ожидание тестового сообщения')
                } else {
                    console.error('Error updating userMeta:', response.data);
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX Error:', status, error);
            }
        });
    })


    $('.btn.btn-outline-primary.text-capitalize-first').on('click', function () {
        let pass1 = $('#inputPassword').val();
        let pass2 = $('#inputPasswordConf').val();
        if (pass1 != pass2 || pass1 === '') {
            $('#inputPasswordConf').addClass('is-invalid');
            $('#inputPasswordConf').removeClass('is-valid');
        } else {
            $('#inputPasswordConf').addClass('is-valid');
            $('#inputPasswordConf').removeClass('is-invalid');
            $.ajax({
                url: myajax.url,
                type: 'POST',
                data: {
                    action: 'change_password',
                    data: pass1,
                    security: myajax.nonce_change_password
                },
                success: function (response) {
                    if (response.success) {
                        window.location.href = '/'
                    } else {
                        console.error('Error updating userMeta:', response.data);
                    }
                },
                error: function (xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                }
            });
        }
    })

});