jQuery(document).ready(function ($) {
    var userMeta;
    refreshUserMeta();
    function createSaveButton() {
        return $('<button type="button" class="btn btn-sm text-nowrap me-2 save-button"></button>')
            .css({
                'background-image': 'url(' + myUserData.url + '/assets/img/icons/save.png)',
                'background-size': 'cover',
                'width': '19px',
                'height': '19px',
                'background-position': 'center'
            });
    }

    function createEditButton() {
        return $('<button type="button" class="btn btn-sm text-nowrap me-2 edit-button"></button>')
            .css({
                'background-image': 'url(' + myUserData.url + '/assets/img/icons/save.png)',
                'background-size': 'cover',
                'width': '19px',
                'height': '19px',
                'background-position': 'center'
            });
    }

    function createQrButton() {
        return $('<button type="button" class="btn btn-sm text-nowrap me-2 qr-button"></button>')
            .css({
                'background-image': 'url(' + myUserData.url + '/assets/img/icons/qr.png)',
                'background-size': 'cover',
                'width': '19px',
                'height': '19px',
                'background-position': 'center'
            });
    }

    function createPenButton() {
        return $('<button type="button" class="btn btn-sm text-nowrap me-2 pen-button"></button>')
            .css({
                'background-image': 'url(' + myUserData.url + '/assets/img/icons/pen.png)',
                'background-size': 'cover',
                'width': '19px',
                'height': '19px',
                'background-position': 'center'
            });
    }

    function createDeleteButton() {
        return $('<button type="button" class="btn btn-sm text-nowrap delete-button"></button>')
            .css({
                'background-image': 'url(' + myUserData.url + '/assets/img/icons/delete.png)',
                'background-size': 'cover',
                'width': '19px',
                'height': '19px',
                'background-position': 'center'
            });
    }

    function createCancelButton() {
        return $('<button type="button" class="btn btn-sm text-nowrap me-2 cancel-button"></button>')
            .css({
                'background-image': 'url(' + myUserData.url + '/assets/img/icons/cancel.png)',
                'background-size': 'cover',
                'width': '19px',
                'height': '19px',
                'background-position': 'center'
            });
    }
    function createBackButton() {
        return $('<button type="button" class="btn btn-sm text-nowrap me-2 back-button"></button>')
            .css({
                'background-image': 'url(' + myUserData.url + '/assets/img/icons/cancel.png)',
                'background-size': 'cover',
                'width': '19px',
                'height': '19px',
                'background-position': 'center'
            });
    }

    function findObjectById(userMeta, id) {
        // Проходим по объекту и ищем объект с соответствующим id
        for (let value of userMeta) {
            if (value.id === id) {
                return value;
            }
        }
        return null; // Если объект не найден
    }

    function refreshUserMeta() {
        $.ajax({
            url: myajax.url,
            type: 'POST',
            data: {
                action: 'refresh_user_meta_devices',
                security: myajax.nonce_refresh_user_meta_devices
            },
            success: function (response) {
                if (response.success) {
                    userMeta = Object.values(response.data); // Обновляем myUserData
                } else {
                    console.error('Error updating userMeta:', response.data);
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX Error:', status, error);
            }
        });
    }

    function makeTr(device) {
        var row = $('<tr></tr>');

        var td1 = $('<td class = "td-id"></td>');
        var span = $('<span></span>')
            .attr('data-bs-toggle', 'tooltip')
            .attr('data-bs-original-title', device.id)
            .text(device.id.substring(0, 8));
        td1.append(span);
        row.append(td1);

        var td2 = $('<td class="td-name"></td>').text(device.name);
        row.append(td2);

        var td3 = $('<td></td>').addClass('text-end');
        var div = $('<div></div>');

        div.append(createQrButton());
        div.append(createPenButton());
        div.append(createDeleteButton());

        td3.append(div);
        row.append(td3);

        return row;
    }

    function addNewRow() {
        var newRow = $('<tr></tr>');

        var td1 = $('<td></td>');
        newRow.append(td1);

        var td2 = $('<td></td>');
        var input = $('<input type="text" class="form-control form-control-sm">');
        td2.append(input);
        newRow.append(td2);

        var td3 = $('<td></td>').addClass('text-end');
        var div = $('<div></div>');

        div.append(createSaveButton());
        div.append(createCancelButton());

        td3.append(div);
        newRow.append(td3);

        $('#deviceTableBody').append(newRow);
    }

    function generateUUID() {
        return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
            var r = Math.random() * 16 | 0, v = c === 'x' ? r : (r & 0x3 | 0x8);
            return v.toString(16);
        });
    }




    // Запуск получения данных и установки обработчиков после получения данных

    $('#generateRows_devices').on('click', function () {
        $('#deviceTableBody').empty();
        for (device of userMeta) {
            let row = makeTr(device);
            $('#deviceTableBody').append(row);
        }
    });

    $(document).on('click', '.btn.btn-sm.btn-outline-dark.text-nowrap.text-capitalize-first.w-100', function () {
        addNewRow();
    });

    $('#deviceTableBody').on('click', '.cancel-button', function () {
        $(this).closest('tr').remove();
    });

    $('#deviceTableBody').on('click', '.edit-button', function () {
        let tr = $(this).closest('tr');
        let id = tr.find('span').attr('data-bs-original-title');
        var $input = tr.find('input.form-control.form-control-sm');
        var inputValue = $input.val();
        $.ajax({
            url: myajax.url,
            type: 'POST',
            data: {
                action: 'update_device',
                data: {
                    id: id,
                    name: inputValue,
                },
                security: myajax.nonce_update_device
            },
            success: function (response) {
                if (response.success) {
                    $input.remove();
                    tr.find('td.td-name').text(inputValue);
                    tr.find('button.back-button').replaceWith(createDeleteButton());
                    tr.find('button.edit-button').replaceWith(createPenButton());
                    // Создаем новый элемент
                    let newButton = createQrButton(); // Функция createQrButton() создает новый элемент

                    // Находим кнопку с классом pen-button
                    let penButton = tr.find('button.pen-button');

                    // Вставляем новый элемент перед кнопкой pen-button
                    penButton.before(newButton);
                    userMeta = Object.values(response.data);
                } else {
                    console.error('Error:', response.data);
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX Error:', status, error);
            }
        });
    });

    $('#deviceTableBody').on('click', '.back-button', function () {
        let tr = $(this).closest('tr');
        tr.find('button.back-button').replaceWith(createDeleteButton());
        tr.find('button.edit-button').replaceWith(createPenButton());
        // Создаем новый элемент
        let newButton = createQrButton(); // Функция createQrButton() создает новый элемент

        // Находим кнопку с классом pen-button
        let penButton = tr.find('button.pen-button');

        // Вставляем новый элемент перед кнопкой pen-button
        penButton.before(newButton);
        let id = tr.find('span').attr('data-bs-original-title');
        let td2 = tr.find('td.td-name');
        td2.empty();
        const device = findObjectById(userMeta, id);;
        td2.text(device.name)
    });

    $('#deviceTableBody').on('click', '.pen-button', function () {
        let tr = $(this).closest('tr');
        tr.find('button.qr-button').remove();
        tr.find('button.delete-button').replaceWith(createBackButton());
        $(this).replaceWith(createEditButton());
        let td = tr.find('td.td-name');
        td.text('');
        var input = $('<input type="text" class="form-control form-control-sm">');
        td.append(input);
    });

    $('#deviceTableBody').on('click', '.delete-button', function () {
        let tr = $(this).closest('tr');
        let id = tr.find('span').attr('data-bs-original-title');
        $.ajax({
            url: myajax.url,
            type: 'POST',
            data: {
                action: 'delete_device',
                data: id,
                security: myajax.nonce_delete_device
            },
            success: function (response) {
                if (response.success) {
                    tr.remove();
                    userMeta = Object.values(response.data);
                } else {
                    console.error('Error:', response.data);
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX Error:', status, error);
            }
        });
    });

    $('#deviceTableBody').on('click', '.save-button', function () {
        var $row = $(this).closest('tr');
        var $input = $row.find('input.form-control.form-control-sm');
        var inputValue = $input.val();

        var dataObject = {
            id: generateUUID(),
            name: inputValue
        };

        $.ajax({
            url: myajax.url,
            type: 'POST',
            data: {
                action: 'update_devices',
                data: dataObject,
                security: myajax.nonce_update_devices
            },
            success: function (response) {
                if (response.success) {
                    let tr = makeTr(dataObject);
                    $row.remove();
                    $('#deviceTableBody').append(tr);
                    userMeta = Object.values(response.data);
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

