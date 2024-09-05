jQuery(document).ready(function ($) {
    $.ajax({
        url: myajax.url,
        type: 'POST',
        data: {
            action: 'refresh_user_meta_devices',
            security: myajax.nonce_refresh_user_meta_devices
        },
        success: function (response) {
            if (response.success) {
                let devices = Object.values(response.data); // Обновляем myUserData
                var $select = $('#devices');

                // Очистите текущие опции
                $select.empty();
                $select.append($('<option>', {
                    value: 'none', // значение опции
                    text: 'Устройства', // текст опции
                    selected: true,
                    disabled: true,
                    hidden: true
                }));
                // Заполните select новыми опциями
                if (devices) {
                    var ind = 0; // Initialize index counter outside the loop
                    devices.forEach(function (item) { // Iterate through the values of the userMeta object
                        $select.append($('<option>', {
                            value: 'device_' + String(ind), // Set the value of the option
                            text: item.name // Set the text of the option
                        }));
                        ind += 1; // Increment the index counter
                    });
                }
            } else {
                console.error('Error updating userMeta:', response.data);
            }
        },
        error: function (xhr, status, error) {
            console.error('AJAX Error:', status, error);
        }
    });
});
