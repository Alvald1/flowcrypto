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
    var operations_all

    $(window).load(function () {
        $.ajax({
            url: myajax.url,
            type: 'POST',
            data: {
                action: 'refresh_user_meta_operations',
                security: myajax.nonce_refresh_user_meta_operations
            },
            success: function (response) {
                if (response.success) {
                    operations_all = Object.values(response.data);
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
    function createTableRow(data, ind) {
        // Создаем элемент <tr> с использованием jQuery
        var $tr = $('<tr></tr>').attr('id', 'row_operation_' + String(ind)).attr('class', 'text-success');

        options = { timeZone: 'Europe/Moscow', year: 'numeric', month: '2-digit', day: '2-digit', hour: '2-digit', minute: '2-digit', second: '2-digit' };
        date = new Date(Number(data.time));
        formattedDate = date.toLocaleString('ru-RU', options).replace(/(\d+)\.(\d+)\.(\d+),/, '$3-$2-$1');

        var $td1 = $('<td></td>').text(formattedDate);
        var $td2 = $('<td></td>').text('USDT');
        var $td3 = $('<td></td>').text('+' + Number(data.amount).toFixed(6));
        var $td4 = $('<td></td>').text('депозит');
        var $td5 = $('<td></td>').text(Number(data.prev_balance).toFixed(8));
        var $td6 = $('<td></td>').text(Number(data.balance).toFixed(8));
        // Добавляем <td> в <tr>
        $tr.append($td1)
            .append($td2)
            .append($td3)
            .append($td4)
            .append($td5)
            .append($td6);

        return $tr;
    }

    function makeTable() {
        for (let i = operations_all.length - 1; i >= 0; i--) {
            let operations = operations_all[i];
            let row = createTableRow(operations, i);
            $('#operations_table').append(row);
        }

    }
});