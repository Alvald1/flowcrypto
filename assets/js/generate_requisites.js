function findOptionByValue(selectElement, value) {
    return Array.from(selectElement.options).find(option => option.value === value) || null;
}

function extractNumber(text) {
    // Используем регулярное выражение для поиска чисел в строке
    const number = text.match(/\d+/);
    // Преобразуем найденное число в формат числа (тип данных number)
    return number ? parseInt(number[0], 10) : null;
}

jQuery(document).ready(function ($) {
    var requisites_all
    var groups
    var devices
    var requisite_id

    $(window).load(function () {
        get_devices()
        get_groups()
        $.ajax({
            url: myajax.url,
            type: 'POST',
            data: {
                action: 'refresh_user_meta_requisites',
                security: myajax.nonce_refresh_user_meta_requisites
            },
            success: function (response) {
                if (response.success) {
                    requisites_all = Object.values(response.data);
                    makeTable()
                } else {
                    console.error('Error updating userMeta:', response.data);
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX Error:', status, error);
            }
        });
    })

    function get_devices() {
        $.ajax({
            url: myajax.url,
            type: 'POST',
            data: {
                action: 'refresh_user_meta_devices',
                security: myajax.nonce_refresh_user_meta_devices
            },
            success: function (response) {
                if (response.success) {
                    devices = Object.values(response.data); // Обновляем myUserData                    
                } else {
                    console.error('Error updating userMeta:', response.data);
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX Error:', status, error);
            }
        });
    }

    function get_groups() {
        $.ajax({
            url: myajax.url,
            type: 'POST',
            data: {
                action: 'refresh_user_meta_groups',
                security: myajax.nonce_refresh_user_meta_groups
            },
            success: function (response) {
                if (response.success) {
                    groups = Object.values(response.data); // Обновляем myUserData                    
                } else {
                    console.error('Error updating userMeta:', response.data);
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX Error:', status, error);
            }
        });
    }

    function groups_update(selector, value, call_back) {
        $.ajax({
            url: myajax.url,
            type: 'POST',
            data: {
                action: 'refresh_user_meta_groups',
                security: myajax.nonce_refresh_user_meta_groups
            },
            success: function (response) {
                if (response.success) {
                    groups = Object.values(response.data); // Обновляем myUserData
                    var $select = $(selector);

                    // Очистите текущие опции
                    $select.empty();
                    $select.append($('<option>', {
                        value: 'none', // значение опции
                        text: '', // текст опции
                        selected: true,
                        disabled: true,
                        hidden: true
                    }));
                    // Заполните select новыми опциями
                    if (groups) {
                        var ind = 0; // Initialize index counter outside the loop
                        Object.values(groups).forEach(function (item) { // Iterate through the values of the userMeta object
                            $select.append($('<option>', {
                                value: 'group_' + String(ind), // Set the value of the option
                                text: item.name // Set the text of the option
                            }));
                            ind += 1; // Increment the index counter
                        });
                        $select.val(value).change()
                    }
                } else {
                    console.error('Error updating userMeta:', response.data);
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX Error:', status, error);
            }
        }).done(function (response) {
            call_back()
        });
    }
    function devices_update(selector, value, call_back) {
        $.ajax({
            url: myajax.url,
            type: 'POST',
            data: {
                action: 'refresh_user_meta_devices',
                security: myajax.nonce_refresh_user_meta_devices
            },
            success: function (response) {
                if (response.success) {
                    devices = Object.values(response.data); // Обновляем myUserData
                    var $select = $(selector);

                    // Очистите текущие опции
                    $select.empty();
                    $select.append($('<option>', {
                        value: 'none', // значение опции
                        text: '', // текст опции
                        selected: true,
                        disabled: true,
                        hidden: true
                    }));
                    // Заполните select новыми опциями
                    if (devices) {
                        var ind = 0; // Initialize index counter outside the loop
                        Object.values(devices).forEach(function (item) { // Iterate through the values of the userMeta object
                            $select.append($('<option>', {
                                value: 'device_' + String(ind), // Set the value of the option
                                text: item.name // Set the text of the option
                            }));
                            ind += 1; // Increment the index counter
                        });
                        $select.val(value).change()
                    }
                } else {
                    console.error('Error updating userMeta:', response.data);
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX Error:', status, error);
            }
        }).done(function (response) {
            call_back()
        });
    }

    $('.btn.btn-outline-dark.btn-sm.rounded-pill.float-end.text-capitalize').on('click', function () {
        groups_update('#groups2', '', () => { });
        devices_update('#devices2', '', () => { });
    });

    function createTableRow(data, ind) {
        // Создаем элемент <tr> с использованием jQuery
        var $tr = $('<tr></tr>').attr('id', 'row_requisites_' + String(ind));

        // Создаем первую ячейку <td>
        var $td1 = $('<td></td>');
        var $div1 = $('<div></div>');
        var $div2 = $('<div class="d-flex flex-column"></div>');

        // Создаем первый div в первой ячейке
        var $div3 = $('<div></div>').append('<span class="ms-1">' + data.device + '</span>');

        // Создаем второй div в первой ячейке
        var $div4 = $('<div></div>').append(
            '<small class="text-secondary" title="" data-bs-toggle="tooltip" data-bs-original-title="' + data.id_device + '">' + data.id_device.substring(0, 8) + '</small>'
        );

        $div2.append($div3).append($div4);
        $div1.append($div2);
        $td1.append($div1);

        // Создаем вторую ячейку <td>
        var $td2 = $('<td></td>');
        var $div5 = $('<div class="d-flex flex-row align-items-center gap-2 mt-1 mb-1"></div>');

        // Создаем изображение в ячейке
        var $img = $('<img>', {
            class: 'pay-method-icon',
            src: data.imgSrc,
            title: '',
            'data-bs-toggle': 'tooltip'
        });

        // Создаем второй div во второй ячейке
        var $div6 = $('<div class="d-flex flex-column"></div>').append(
            $('<small></small>').text(data.type)
        ).append(
            $('<span></span>').text(data.requisites)
        ).append(
            $('<small class="text-secondary"></small>').text(data.holderName)
        );

        $div5.append($img).append($div6);
        $td2.append($div5);

        // Создаем третью ячейку <td>
        var $td3 = $('<td></td>').text(data.group);

        // Создаем четвертую ячейку <td>
        var $td4 = $('<td></td>').text(data.currency);

        // Создаем пятую ячейку <td>
        var $td5 = $('<td></td>');
        var $div7 = $('<div class="d-flex flex-column"></div>').append(
            '<span>от ' + data.minPayInDealSum + ' ' + data.currency + '</span>'
        ).append(
            '<span>до ' + data.maxPayInDealSum + ' ' + data.currency + '</span>'
        );
        $td5.append($div7);

        // Создаем шестую ячейку <td>
        var $td6 = $('<td></td>');
        var $div8 = $('<div class="d-flex flex-column" style="width: 200px;"></div>');

        // Прогресс по дням
        var $spanDay = $('<span class="mb-2" title="" data-bs-toggle="tooltip" data-bs-original-title="день"></span>');
        var $progressDay = $('<div class="progress progress-bar-striped position-relative"></div>');
        var $progressBarDay = $('<div class="progress-bar progress-bar-striped bg-secondary-light" role="progressbar"></div>').css({
            width: String(Number(data.dayTradesSum) / Number(data.dayTradesSumLimit)) + '%',
            'aria-valuenow': '0',
            'aria-valuemin': '0'
        });
        var $smallDay = $('<small class="justify-content-center d-flex position-absolute w-100">' + data.dayTradesSum + '/' + data.dayTradesSumLimit + '</small>').text(data.dayProgressValue);
        $progressDay.append($progressBarDay).append($smallDay);
        $spanDay.append($progressDay);

        // Прогресс по месяцам
        var $spanMonth = $('<span title="" data-bs-toggle="tooltip" data-bs-original-title="месяц"></span>');
        var $progressMonth = $('<div class="progress progress-bar-striped position-relative"></div>');
        var $progressBarMonth = $('<div class="progress-bar progress-bar-striped bg-secondary-light" role="progressbar"></div>').css({
            width: String(Number(data.monthTradesSum) / Number(data.monthTradesSumLimit)) + '%',
            'aria-valuenow': '0',
            'aria-valuemin': '0'
        });
        var $smallMonth = $('<small class="justify-content-center d-flex position-absolute w-100">' + data.monthTradesSum + '/' + data.monthTradesSumLimit + '</small>').text(data.monthProgressValue);
        $progressMonth.append($progressBarMonth).append($smallMonth);
        $spanMonth.append($progressMonth);

        $div8.append($spanDay).append($spanMonth);
        $td6.append($div8);

        // Создаем седьмую ячейку <td>
        var $td7 = $('<td></td>').append('<span>' + data.concurrentTradesCount + '</span>');

        // Создаем восьмую ячейку <td>
        var $td8 = $('<td></td>');
        var $div9 = $('<div class="d-flex flex-row align-items-center justify-content-between"></div>').append(
            $('<span class="text-capitalize-first"></span>').text(data.status).addClass(data.is_active === 'true' ? 'active-label' : 'inactive-label')
        ).append(
            $('<div></div>').append(
                $('<div class="form-check form-switch d-flex align-items-center"></div>').append(
                    $('<input>', {
                        class: 'form-check-input isActive front',
                        type: 'checkbox',
                        role: 'switch',
                        style: 'cursor: pointer;',
                        checked: data.is_active === 'true'
                    })
                )
            )
        );
        $td8.append($div9);

        // Создаем девятую ячейку <td>
        var $td9 = $('<td class="text-end"></td>').append(
            $('<button type="button" class=" edit_requisites btn btn-sm btn-outline-dark text-nowrap me-2 text-capitalize"></button>').append(
                $('<i class="fa fa-pencil"></i>').text(' редактировать')
            )
        ).append(
            $('<button type="button" class=" delete_requisites btn btn-sm btn-outline-dark text-nowrap text-capitalize"></button>').append(
                $('<i class="fa fa-trash"></i>').text(' удалить')
            )
        );

        // Добавляем <td> в <tr>
        $tr.append($td1)
            .append($td2)
            .append($td3)
            .append($td4)
            .append($td5)
            .append($td6)
            .append($td7)
            .append($td8)
            .append($td9);

        return $tr;
    }

    function makeTable() {
        for (let i = requisites_all.length - 1; i >= 0; i--) {
            let requisites = requisites_all[i];
            let row = createTableRow(requisites, i);
            $('#requisites_table').append(row);
        }

        $('.delete_requisites').on('click', function () {
            const tr_id = $(this).closest('tr').attr('id');
            requisite_id = extractNumber(tr_id)
            $.ajax({
                url: myajax.url,
                type: 'POST',
                data: {
                    action: 'delete_requisites',
                    data: requisite_id,
                    security: myajax.nonce_delete_requisites
                },
                success: function (response) {
                    if (response.success) {
                        requisites_all = Object.values(response.data); // Обновляем myUserData   

                        location.reload()
                    } else {
                        console.error('Error updating userMeta:', response.data);
                    }
                },
                error: function (xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                }
            });
        });

        $('.isActive').on('change', function () {
            // Ищем span относительно текущего input
            let text
            if ($(this).hasClass('back')) {
                text = $('#statusLabel2'); // Найдите метку по её идентификатору
            } else {
                text = $(this).closest('td').find('span');
            }
            if ($(this).is(':checked')) {
                text.text('активный').addClass('active-label').removeClass('inactive-label');
            } else {
                text.text('неактивный').addClass('inactive-label').removeClass('active-label');
            }
        });



        $('.edit_requisites').on('click', function () {

            // Функция для открытия модального окна
            function openModal() {

                $modal.removeClass('fade').addClass('show').css('display', 'block')
                    .attr({
                        'aria-modal': 'true',
                        'role': 'dialog',
                        'aria-hidden': 'false'
                    });
                $('.modal-backdrop.fade.show').css('visibility', 'visible');
                document.querySelector('#currencies3').nextElementSibling.querySelector('.select2-selection').style.border = '';
                document.querySelector('#type3').nextElementSibling.querySelector('.select2-selection').style.border = '';
                document.querySelector('#methods2').nextElementSibling.querySelector('.select2-selection').style.border = '';
                document.querySelector('#requisites2').style.border = '';
                document.querySelector('#holderName2').style.border = '';
                document.querySelector('#dayTradesSumLimit2').style.border = '';
                document.querySelector('#monthTradesSumLimit2').style.border = '';
            }

            // Функция для закрытия модального окна
            function closeModal() {
                $modal.removeClass('show').addClass('fade').css('display', 'none')
                    .removeAttr('aria-modal role')
                    .attr('aria-hidden', 'true');
                $('.modal-backdrop.fade.show').css('visibility', 'hidden');

                $('#currencies2').next('.select2-container').find('.select2-selection').css('border', '');
                $('#type2').next('.select2-container').find('.select2-selection').css('border', '');
                $('#methods').next('.select2-container').find('.select2-selection').css('border', '');
                $('#requisites, #holderName, #dayTradesSumLimit, #monthTradesSumLimit').css('border', '');
            }


            // Находим модальное окно и кнопки закрытия
            const $modal = $('#requisites_edit');
            const $closeButton = $('.btn-close_create');
            const $closeButton2 = $('.btn-close_create2');


            // Обработчики для кнопок закрытия
            $closeButton.on('click', closeModal);
            $closeButton2.on('click', closeModal);

            // Закрытие модального окна при клике на любое место вне модального окна
            $modal.on('click', function (event) {
                if ($(event.target).is($modal)) {
                    closeModal();
                }
            });

            // Получение и присвоение данных
            const tr_id = $(this).closest('tr').attr('id');
            requisite_id = extractNumber(tr_id)
            const requisite = requisites_all[requisite_id];

            $('.col-sm-8.form-check.form-switch.d-flex.align-items-center .isActive')
                .prop('checked', requisite.is_active === 'true')
                .trigger('change');

            $('#currencies3').val($('#currencies3 option').filter(function () {
                return $(this).text() === requisite.currency;
            }).val()).change();

            $('#type3').val($('#type3 option').filter(function () {
                return $(this).text() === requisite.type;
            }).val()).change();

            $('#methods2').val(requisite.method).change();
            $('#requisites2').val(requisite.requisites);
            $('#holderName2').val(requisite.holderName);


            groups_update('#groups3', `group_${groups.findIndex(group => group.id === requisite.id_group)}`, () => { });
            devices_update('#devices3', `device_${devices.findIndex(device => device.id === requisite.id_device)}`, openModal);


            $('#autoclose2').prop('checked', requisite.autoclose === 'true').change();
            $('#minPayInDealSum2').val(requisite.minPayInDealSum); // Используйте 'input' для обновления интерфейса
            $('#maxPayInDealSum2').val(requisite.maxPayInDealSum);
            $('#dayTradesSumLimit2').val(requisite.dayTradesSumLimit);
            $('#monthTradesSumLimit2').val(requisite.monthTradesSumLimit);
            $('#concurrentTradesCount2').val(requisite.concurrentTradesCount);

        });





        $('#autoclose2').on('change', function () {
            let span = $(this).next('span')
            if ($(this).is(':checked')) {
                span.text('включено').addClass('active-label').removeClass('inactive-label');
            } else {
                span.text('выключено').addClass('inactive-label').removeClass('active-label');
            }
        });




    }
    $('#submit').on('click', function () {


        let flag = 0
        let is_active = $('.form-check-input.isActive').is(':checked');
        let currency = $('#currencies2').val();
        let type = $('#type2').val();
        let method = $('#methods').val();
        let requisites = $('#requisites').val();
        let holderName = $('#holderName').val();
        let group = $('#groups2').val();
        let device = $('#devices2').val();
        let autoclose = $('#autoclose').is(':checked')
        let minPayInDealSum = $('#minPayInDealSum').val() == '' ? 'n/a' : $('#minPayInDealSum').val();
        let maxPayInDealSum = $('#maxPayInDealSum').val() == '' ? 'n/a' : $('#maxPayInDealSum').val();
        let dayTradesSumLimit = $('#dayTradesSumLimit').val() == '' ? 'n/a' : $('#dayTradesSumLimit').val();
        let monthTradesSumLimit = $('#monthTradesSumLimit').val() == '' ? 'n/a' : $('#monthTradesSumLimit').val();
        let concurrentTradesCount = $('#concurrentTradesCount').val() == '' ? 'n/a' : $('#concurrentTradesCount').val();


        if (currency == null) {
            ++flag;
            $('#currencies2').next('.select2-container').find('.select2-selection').css('border', '3px solid red');
        } else {
            currency = $('#currencies2 option[value="' + currency + '"]').text();
            $('#currencies2').next('.select2-container').find('.select2-selection').css('border', '');
        }

        if (type == null) {
            ++flag;
            $('#type2').next('.select2-container').find('.select2-selection').css('border', '3px solid red');
        } else {
            type = $('#type2 option[value="' + type + '"]').text();
            $('#type2').next('.select2-container').find('.select2-selection').css('border', '');
        }

        if (method == null) {
            ++flag;
            $('#methods').next('.select2-container').find('.select2-selection').css('border', '3px solid red');
        } else {
            imgSrc = $('#methods option[value="' + method + '"]').data('image');
            $('#methods').next('.select2-container').find('.select2-selection').css('border', '');
        }

        if (requisites == '') {
            ++flag;
            $('#requisites').css('border', '3px solid red');
        } else {
            $('#requisites').css('border', '');
        }

        if (holderName == '') {
            ++flag;
            $('#holderName').css('border', '3px solid red');
        } else {
            $('#holderName').css('border', '');
        }

        if (dayTradesSumLimit == 'n/a') {
            ++flag;
            $('#dayTradesSumLimit').css('border', '3px solid red');
        } else {
            $('#dayTradesSumLimit').css('border', '');
        }

        if (monthTradesSumLimit == 'n/a') {
            ++flag;
            $('#monthTradesSumLimit').css('border', '3px solid red');
        } else {
            $('#monthTradesSumLimit').css('border', '');
        }
        if (group != null) {
            id_group = groups[extractNumber(group)]['id']
            group = groups[extractNumber(group)]['name']
        } else {
            group = 'n/a'
            id_group = 'n/a'
        }
        if (device != null) {
            id_device = devices[extractNumber(device)]['id']
            device = devices[extractNumber(device)]['name']
        } else {
            device = 'n/a'
            id_device = 'n/a'
        }
        status_ = $('#statusLabel1').text()
        if (flag == 0) {
            let data = {
                imgSrc: imgSrc,
                is_active: is_active,
                status: status_,
                currency: currency,
                type: type,
                method: method,
                requisites: requisites,
                holderName: holderName,
                id_group: id_group,
                group: group,
                id_device: id_device,
                device: device,
                autoclose: autoclose,
                minPayInDealSum: minPayInDealSum,
                maxPayInDealSum: maxPayInDealSum,
                dayTradesSum: '0',
                monthTradesSum: '0',
                dayTradesSumLimit: dayTradesSumLimit,
                monthTradesSumLimit: monthTradesSumLimit,
                concurrentTradesCount: concurrentTradesCount
            };
            $.ajax({
                url: myajax.url,
                type: 'POST',
                data: {
                    action: 'submit_requisites',
                    data: data,
                    security: myajax.nonce_submit_requisites
                },
                success: function (response) {
                    if (response.success) {
                        requisites_all = Object.values(response.data);
                        location.reload()
                    } else {
                        console.error('Error updating userMeta:', response.data);
                    }
                },
                error: function (xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                }
            });
        }

    });

    $('#submit2').on('click', function () {


        let flag = 0
        let is_active = $('.form-check-input.isActive.back').is(':checked');
        let currency = $('#currencies3').val();
        let type = $('#type3').val();
        let method = $('#methods2').val();
        let requisites = $('#requisites2').val();
        let holderName = $('#holderName2').val();
        let group = $('#groups3').val();
        let device = $('#devices3').val();
        let autoclose = $('#autoclose2').is(':checked')
        let minPayInDealSum = $('#minPayInDealSum2').val() == '' ? 'n/a' : $('#minPayInDealSum2').val();
        let maxPayInDealSum = $('#maxPayInDealSum2').val() == '' ? 'n/a' : $('#maxPayInDealSum2').val();
        let dayTradesSumLimit = $('#dayTradesSumLimit2').val() == '' ? 'n/a' : $('#dayTradesSumLimit2').val();
        let monthTradesSumLimit = $('#monthTradesSumLimit2').val() == '' ? 'n/a' : $('#monthTradesSumLimit2').val();
        let concurrentTradesCount = $('#concurrentTradesCount2').val() == '' ? 'n/a' : $('#concurrentTradesCount2').val();


        if (currency == null) {
            ++flag;
            $('#currencies3').next('.select2-container').find('.select2-selection').css('border', '3px solid red');
        } else {
            currency = $('#currencies3 option[value="' + currency + '"]').text();
            $('#currencies3').next('.select2-container').find('.select2-selection').css('border', '');
        }

        if (type == null) {
            ++flag;
            $('#type3').next('.select2-container').find('.select2-selection').css('border', '3px solid red');
        } else {
            type = $('#type3 option[value="' + type + '"]').text();
            $('#type3').next('.select2-container').find('.select2-selection').css('border', '');
        }

        if (method == null) {
            ++flag;
            $('#methods2').next('.select2-container').find('.select2-selection').css('border', '3px solid red');
        } else {
            imgSrc = $('#methods2 option[value="' + method + '"]').data('image');
            $('#methods2').next('.select2-container').find('.select2-selection').css('border', '');
        }

        if (requisites == '') {
            ++flag;
            $('#requisites2').css('border', '3px solid red');
        } else {
            $('#requisites2').css('border', '');
        }

        if (holderName == '') {
            ++flag;
            $('#holderName2').css('border', '3px solid red');
        } else {
            $('#holderName2').css('border', '');
        }

        if (dayTradesSumLimit == 'n/a') {
            ++flag;
            $('#dayTradesSumLimit2').css('border', '3px solid red');
        } else {
            $('#dayTradesSumLimit2').css('border', '');
        }

        if (monthTradesSumLimit == 'n/a') {
            ++flag;
            $('#monthTradesSumLimit2').css('border', '3px solid red');
        } else {
            $('#monthTradesSumLimit2').css('border', '');
        }
        if (group != null) {
            id_group = groups[extractNumber(group)]['id']
            group = groups[extractNumber(group)]['name']
        } else {
            group = 'n/a'
            id_group = ''
        }
        if (device != null) {
            id_device = devices[extractNumber(device)]['id']
            device = devices[extractNumber(device)]['name']
        } else {
            device = 'n/a'
            id_device = ''
        }
        status_ = $('#statusLabel2').text()
        if (flag == 0) {
            let data = {
                imgSrc: imgSrc,
                is_active: is_active,
                status: status_,
                currency: currency,
                type: type,
                method: method,
                requisites: requisites,
                holderName: holderName,
                id_group: id_group,
                group: group,
                id_device: id_device,
                device: device,
                autoclose: autoclose,
                minPayInDealSum: minPayInDealSum,
                maxPayInDealSum: maxPayInDealSum,
                dayTradesSum: '0',
                monthTradesSum: '0',
                dayTradesSumLimit: dayTradesSumLimit,
                monthTradesSumLimit: monthTradesSumLimit,
                concurrentTradesCount: concurrentTradesCount
            };
            $.ajax({
                url: myajax.url,
                type: 'POST',
                data: {
                    action: 'edit_requisites',
                    data: data,
                    id: requisite_id,
                    security: myajax.nonce_edit_requisites
                },
                success: function (response) {
                    if (response.success) {
                        requisites_all = Object.values(response.data);
                        location.reload()
                    } else {
                        console.error('Error updating userMeta:', response.data);
                    }
                },
                error: function (xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                }
            });
        }

    });

    $('#autoclose1').on('change', function () {
        let span = $(this).next('span')
        if ($(this).is(':checked')) {
            span.text('включено').addClass('active-label').removeClass('inactive-label');
        } else {
            span.text('выключено').addClass('inactive-label').removeClass('active-label');
        }
    });

    // Убедитесь, что обработчик привязан к существующему элементу
    $('#isActive1').on('change', function () {
        var label = $('#statusLabel1'); // Найдите метку по её идентификатору
        if ($(this).is(':checked')) {
            label.text('активный').addClass('active-label').removeClass('inactive-label');
        } else {
            label.text('неактивный').addClass('inactive-label').removeClass('active-label');
        }
    });




});