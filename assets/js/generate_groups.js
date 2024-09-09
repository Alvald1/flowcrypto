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
                action: 'refresh_user_meta_groups',
                security: myajax.nonce_refresh_user_meta_groups
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

    function makeTr(group) {
        var row = $('<tr></tr>');

        var td1 = $('<td></td>').addClass('td-id');
        var span = $('<span></span>')
            .attr('data-bs-toggle', 'tooltip')
            .attr('data-bs-original-title', group.id)
            .text(group.id.substring(0, 8));
        td1.append(span);
        row.append(td1);

        var td2 = $('<td></td>').text(group.name).addClass('td-name');
        row.append(td2);

        var td3 = $('<td></td>').addClass('req_all').text(group.all);
        var td4 = $('<td></td>').addClass('req_active').text(group.active);
        var td5 = $('<td></td>').addClass('tex-end');
        var div = $('<div></div>');

        div.append(createPenButton());
        div.append(createDeleteButton());

        td5.append(div);
        row.append(td3);
        row.append(td4);
        row.append(td5);

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

        var td3 = $('<td></td>').addClass('req_all').text('0');
        var td4 = $('<td></td>').addClass('req_active').text('0');
        var td5 = $('<td></td>').addClass('tex-end');
        var div = $('<div></div>');

        div.append(createSaveButton());
        div.append(createCancelButton());

        td5.append(div);
        newRow.append(td3);
        newRow.append(td4);
        newRow.append(td5);

        $('#groupTableBody').append(newRow);
    }

    function generateUUID() {
        return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
            var r = Math.random() * 16 | 0, v = c === 'x' ? r : (r & 0x3 | 0x8);
            return v.toString(16);
        });
    }

    // Запуск получения данных и установки обработчиков после получения данных

    $('#generateRows_groups').on('click', function () {
        $('#groupTableBody').empty();
        for (group of userMeta) {
            let row = makeTr(group);
            $('#groupTableBody').append(row);
        }
    });

    $(document).on('click', '.btn.btn-sm.btn-outline-dark.text-nowrap.text-capitalize-first.w-100', function () {
        addNewRow();
    });

    $('#groupTableBody').on('click', '.cancel-button', function () {
        $(this).closest('tr').remove();
    });

    $('#groupTableBody').on('click', '.edit-button', function () {
        let tr = $(this).closest('tr');
        let id = tr.find('span').attr('data-bs-original-title');
        var $input = tr.find('input.form-control.form-control-sm');
        var inputValue = $input.val();
        $.ajax({
            url: myajax.url,
            type: 'POST',
            data: {
                action: 'update_group',
                data: {
                    id: id,
                    name: inputValue,
                },
                security: myajax.nonce_update_group
            },
            success: function (response) {
                if (response.success) {
                    $input.remove();
                    tr.find('td.td-name').text(inputValue);
                    tr.find('button.back-button').replaceWith(createDeleteButton());
                    tr.find('button.edit-button').replaceWith(createPenButton());
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

    $('#groupTableBody').on('click', '.back-button', function () {
        let tr = $(this).closest('tr');
        tr.find('button.back-button').replaceWith(createDeleteButton());
        tr.find('button.edit-button').replaceWith(createPenButton());

        let id = tr.find('span').attr('data-bs-original-title');
        let td2 = tr.find('td.td-name');
        td2.empty();
        const group = findObjectById(userMeta, id);;
        td2.text(group.name)
    });

    $('#groupTableBody').on('click', '.pen-button', function () {
        let tr = $(this).closest('tr');
        tr.find('button.qr-button').remove();
        tr.find('button.delete-button').replaceWith(createBackButton());
        $(this).replaceWith(createEditButton());
        let td = tr.find('td.td-name');
        td.text('');
        var input = $('<input type="text" class="form-control form-control-sm">');
        td.append(input);
    });

    $('#groupTableBody').on('click', '.delete-button', function () {
        let tr = $(this).closest('tr');
        let id = tr.find('span').attr('data-bs-original-title');
        $.ajax({
            url: myajax.url,
            type: 'POST',
            data: {
                action: 'delete_group',
                data: id,
                security: myajax.nonce_delete_group
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

    $('#groupTableBody').on('click', '.save-button', function () {
        var $row = $(this).closest('tr');
        var $input = $row.find('input.form-control.form-control-sm');
        var inputValue = $input.val();



        $.ajax({
            url: myajax.url,
            type: 'POST',
            data: {
                action: 'update_groups',
                data: inputValue,
                security: myajax.nonce_update_groups
            },
            success: function (response) {
                if (response.success) {
                    userMeta = Object.values(response.data);
                    let tr = makeTr(userMeta[Object.keys(userMeta).length - 1]);
                    $row.remove();
                    $('#groupTableBody').append(tr);
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

