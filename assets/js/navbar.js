document.getElementById('traderStatus').addEventListener('click', function () {
    var label = document.querySelector('label[for="traderStatus"]');
    if (this.checked) {
        label.classList.remove('bg-danger');
        label.classList.add('bg-success');
    } else {
        label.classList.remove('bg-success');
        label.classList.add('bg-danger');
    }
});

document.getElementById('traderPayOutStatus').addEventListener('click', function () {
    var label = document.querySelector('label[for="traderPayOutStatus"]');
    if (this.checked) {
        label.classList.remove('bg-danger');
        label.classList.add('bg-success');
    } else {
        label.classList.remove('bg-success');
        label.classList.add('bg-danger');
    }
});
