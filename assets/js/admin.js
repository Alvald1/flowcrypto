function generatePassword(length) {
    // Возможные символы для пароля
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+~`|}{[]:;?><,./-=';
    let password = '';

    // Генерация пароля
    for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * characters.length);
        password += characters[randomIndex];
    }

    return password;
}


jQuery(document).ready(function ($) {
    var $button = $('<button/>', {
        id: 'create_user',
        type: 'button',
        class: 'btn btn-sm btn-outline-dark text-nowrap text-capitalize',
        text: 'создать пользователя'
    });

    var $button2 = $('<button/>', {
        id: 'get_data_users',
        type: 'button',
        class: 'btn btn-sm btn-outline-dark text-nowrap text-capitalize',
        text: 'получить данные'
    });
    // Функция для открытия кастомного алерта
    // Функция для открытия кастомного алерта
    function showCustomAlert(username, password) {
        // Установить значения полей
        document.getElementById('usernameField').value = username;
        document.getElementById('passwordField').value = password;

        // Установить текст сообщения
        document.getElementById('alertMessage').innerText = 'Your details:';

        // Показать окно алерта
        document.getElementById('customAlert').style.display = 'flex';
    }

    // Закрыть алерт при нажатии на кнопку
    document.getElementById('closeAlert').addEventListener('click', function () {
        document.getElementById('customAlert').style.display = 'none';
    });

    // Пример вызова кастомного алерта с username и password
    // showCustomAlert('exampleUsername', 'examplePassword');


    // Пример вызова кастомного алерта
    // showCustomAlert('This is your custom alert. You can copy this text.');

    // Добавление кнопки в нужное место на странице
    // Например, добавление в элемент с id="target-container"
    $('#admin_bar_buttons').append($button);
    $('#admin_bar_buttons').append($button2);

    $('#create_user').on('click', function () {
        let id
        $.ajax({
            url: myajax.url,
            type: 'POST',
            data: {
                action: 'get_users_id',
                security: nonce.nonce_get_users_id
            },
            success: function (response) {
                if (response.success) {
                    id = response.data.length + 1
                } else {
                    console.error('Error updating userMeta:', response.data);
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX Error:', status, error);
            }
        }).done(function (response) {
            let username = 'Team ' + id
            let password = generatePassword(12);
            let email = 'username_' + id + '@example.com'
            $.ajax({
                url: myajax.url,
                type: 'POST',
                data: {
                    action: 'create_user_my',
                    username: username,
                    password: password,
                    email: email,
                    security: nonce.nonce_create_user_my
                },
                success: function (response) {
                    if (response.success) {
                        showCustomAlert(username, password)

                    } else {
                        console.error('Error updating userMeta:', response.data);
                    }
                },
                error: function (xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                }
            })
        });
    })

    $('#get_data_users').on('click', function () {
        $.ajax({
            url: myajax.url,
            type: 'POST',
            data: {
                action: 'get_users_data',
                security: nonce.nonce_get_users_data
            },
            success: function (response) {
                if (response.success) {
                    // Перенаправляем пользователя на URL для скачивания файла
                    const a = document.createElement('a');
                    a.href = response.data;
                    a.download = 'users_list.csv'; // Имя файла, если необходимо

                    // Добавляем элемент в DOM
                    document.body.appendChild(a);

                    // Инициируем клик по элементу
                    a.click();

                    // Удаляем элемент из DOM
                    document.body.removeChild(a);
                } else {
                    console.error('Error:', response.data);
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX Error:', status, error);
            }
        });
    });



});