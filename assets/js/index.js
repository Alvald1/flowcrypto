
// Находим кнопку закрытия внутри модального окна



document.addEventListener('DOMContentLoaded', function () {//устройства
    // Находим кнопку, открывающую модальное окно
    const openButton = document.getElementById('replenish');
    const closeButton = document.querySelector('.btn-close_income');
    const closeButton2 = document.querySelector('.btn-close_income2');
    // Находим модальное окно
    const modal = document.getElementById('income');



    // Функция для открытия модального окна
    function openModal() {
        modal.classList.add('show');
        modal.style.display = 'block';
        modal.setAttribute('aria-modal', 'true');
        modal.setAttribute('role', 'dialog');
        modal.setAttribute('aria-hidden', 'false');
        document.querySelector('.modal-backdrop.fade.show').style.visibility = 'visible';
    }

    // Функция для закрытия модального окна
    function closeModal() {
        modal.classList.remove('show');
        modal.style.display = 'none';
        modal.removeAttribute('aria-modal');
        modal.removeAttribute('role');
        modal.setAttribute('aria-hidden', 'true');
        document.querySelector('.modal-backdrop.fade.show').style.visibility = 'hidden';
    }

    // Обработчик события нажатия на кнопку открытия
    openButton.addEventListener('click', openModal);

    // Обработчик события нажатия на кнопку закрытия
    closeButton.addEventListener('click', closeModal);
    // Обработчик события нажатия на кнопку закрытия
    closeButton2.addEventListener('click', closeModal);

    // Закрытие модального окна при клике на любое место вне модального окна
    modal.addEventListener('click', function (event) {
        if (event.target === modal) {
            closeModal();
        }
    });
});

jQuery(document).ready(function ($) {
    $.ajax({
        url: myajax.url,
        type: 'POST',
        data: {
            action: 'get_started_info',
            security: myajax.nonce_get_started_info
        },
        success: function (response) {
            if (response.success) {
                limit = response.data['limit']
                balance = response.data['balance']
                $('div.account-sum > .account-amount.text-nowrap').text(Number(balance).toFixed(6) + ' USDT');
                $('div.account-sum > .limit').text('Страховочный лимит: ' + Number(limit).toFixed(2) + ' / 1000.00 USDT');
                if (limit == '1000') {
                    $('.text-danger').css('visibility', 'hidden');
                } else {
                    $('.text-danger').css('visibility', 'visible');
                }
            } else {
                console.error('Error updating userMeta:', response.data);
            }
        },
        error: function (xhr, status, error) {
            console.error('AJAX Error:', status, error);
        }
    })

    disabled = false

    function aprove_income() {
        disabled = false
        let amount = Number($('#amount').val());
        flag = 0;
        $.ajax({
            url: myajax.url,
            type: 'POST',
            data: {
                action: 'aprove_income',
                interval: 60 * 15,
                address: $('#address_income').text(),
                security: myajax.nonce_aprove_income
            },
            success: function (response) {
                if (response.success) {
                    data = JSON.parse(response.data)['data'];
                    for (elem of data) {
                        t1 = Number(elem['amount'])
                        t2 = (amount * 10 ** elem['decimals'])
                        if (elem['confirmed'] == 1 && t1 == t2) {
                            flag = 1
                            $.ajax({
                                url: myajax.url,
                                type: 'POST',
                                data: {
                                    action: 'update_balance',
                                    income: amount,
                                    security: myajax.nonce_update_balance
                                },
                                success: function (response) {
                                    if (response.success) {
                                        location.reload()
                                        alert('Пополнение засчитано')
                                    } else {
                                        console.error('Error updating userMeta:', response.data);
                                    }
                                },
                                error: function (xhr, status, error) {
                                    console.error('AJAX Error:', status, error);
                                }
                            })
                        }
                    }
                } else {
                    console.error('Error updating userMeta:', response.data);
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX Error:', status, error);
            }
        }).done(function (response) {
            if (flag === 0) {
                alert('Пополнение не засчитано')
            }
        })
    }

    $('#submit_income').on('click', function () {
        if (disabled == false) {
            disabled = true
            setTimeout(aprove_income, 1500)
        }
    })

    $(document).keyup(function (event) {
        if ($("#amount").is(":focus") && event.key == "Enter") {
            if (disabled == false) {
                disabled = true
                setTimeout(aprove_income, 1500)
            }
        }
    });

});