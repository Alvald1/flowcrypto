<?php
/*
Template Name: Реквизиты
*/
get_header(); ?>
<!-- Шапка -->

<div class="pl-2 pr-2">
    <div class="row m-4 mt-0">
        <div class="col-sm-12">
            <div class="row">
                <div class="loader-wrapper h-100">
                    <div class="row mt-0">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card card-body mb-0">
                                        <div class="row mt-2">
                                            <!---->
                                            <div class="form-group mb-2 me-2 col-md-3 col-lg-3 col-xl-2">
                                                <div class="col p-0">
                                                    <form>
                                                        <select id="currencies" name="currencies">
                                                            <option value="none" selected disabled hidden>Валюты
                                                            </option>
                                                            <option value="currencies-0">RUB</option>
                                                            <option value="currencies-1">UZS</option>
                                                        </select>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="form-group mb-2 me-2 col-md-3 col-lg-3 col-xl-2">
                                                <div class="col p-0">
                                                    <form>
                                                        <select id="mySelect">
                                                            <option value=""></option>
                                                            <option value="methods-0"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Неизвестен</option>
                                                            <option value="methods-1"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/tinkoff.31211ca6.png' ?>">
                                                                Тинькофф</option>
                                                            <option value="methods-2"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/sberbank.b3f2cde9.png' ?>">
                                                                Сбербанк</option>
                                                            <option value="methods-3"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/alfa.png' ?>">
                                                                Альфа-Банк</option>
                                                            <option value="methods-4"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/vtb.png' ?>">
                                                                ВТБ</option>
                                                            <option value="methods-5"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/rosselhozbank.1474e967.png' ?>">
                                                                Россельхозбанк</option>
                                                            <option value="methods-6"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/raiffeisenbank.59da2009.png' ?>">
                                                                Райффайзенбанк</option>
                                                            <option value="methods-7"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/rsb.51ad948f.png' ?>">
                                                                Российский
                                                                Стандарт</option>
                                                            <option value="methods-8"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/promsvyaz.523dfc2c.png' ?>">
                                                                Промсвязьбанк</option>
                                                            <option value="methods-9"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/gazprombank.ba7980ff.png' ?>">
                                                                Газпромбанк</option>
                                                            <option value="methods-10"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/bank_open.2bb9dce2.png' ?>">
                                                                Банк
                                                                Открытие</option>
                                                            <option value="methods-11"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/ubrib.068e80aa.png' ?>">
                                                                Банк
                                                                УБРиР</option>
                                                            <option value="methods-12"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/mkb.f8ef2f20.png' ?>">
                                                                Московский
                                                                кредитный банк</option>
                                                            <option value="methods-13"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/home_bank.d24757cf.png' ?>">
                                                                Хоум
                                                                Банк</option>
                                                            <option value="methods-14"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/otp_bank.e5f1cb15.png' ?>">
                                                                ОТП
                                                                Банк</option>
                                                            <option value="methods-15"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/uralsib.24e1c4be.png' ?>">
                                                                Уралсиб</option>
                                                            <option value="methods-16"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/ak_bars_bank.1778d63b.png' ?>">
                                                                Ак
                                                                Барс</option>
                                                            <option value="methods-17"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/ros_bank.a85d8932.png' ?>">
                                                                Росбанк</option>
                                                            <option value="methods-18"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/fora.02426183.png' ?>">
                                                                Фора-банк</option>
                                                            <option value="methods-19"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/absolute_bank.dfcbc270.png' ?>">
                                                                Абсолют
                                                                Банк</option>
                                                            <option value="methods-20"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/rost_finance.62396604.png' ?>">
                                                                РостФинанс
                                                                Банк</option>
                                                            <option value="methods-21"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/ozon.584de2e9.png' ?>">
                                                                Ozon
                                                                Банк</option>
                                                            <option value="methods-22"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unistream.60647c58.png' ?>">
                                                                Юнистрим</option>
                                                            <option value="methods-23"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/mts.8d2a6abd.png' ?>">
                                                                МТС
                                                                Банк</option>
                                                            <option value="methods-24"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/tkb.924caaf8.png' ?>">
                                                                ТрансКапиталБанк</option>
                                                            <option value="methods-25"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/pochta.834c0104.png' ?>">
                                                                Почта
                                                                Банк</option>
                                                            <option value="methods-26"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/rncb.362c0872.png' ?>">
                                                                РНКБ</option>
                                                            <option value="methods-27"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/genbank.021557b4.png' ?>">
                                                                Генбанк</option>
                                                            <option value="methods-28"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/sovkom.10210a94.png' ?>">
                                                                Совкомбанк</option>
                                                            <option value="methods-29"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/cifra.4f72db79.png' ?>">
                                                                Цифра
                                                                банк</option>
                                                            <option value="methods-30"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/ingo.cdc011f9.png' ?>">
                                                                Ингосстрах
                                                                Банк</option>
                                                            <option value="methods-31"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/svoi.3c6448ab.png' ?>">
                                                                Свой
                                                                Банк</option>
                                                            <option value="methods-32"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/avangard.646d3aca.png' ?>">
                                                                Авангард</option>
                                                            <option value="methods-33"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/rencredit.1a119ffe.png' ?>">
                                                                Ренессанс
                                                                Банк</option>
                                                            <option value="methods-34"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/solid.18fcfee7.png' ?>">
                                                                Солидарность</option>
                                                            <option value="methods-35"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/pucbr.3e5c68a5.png' ?>">
                                                                ПУ
                                                                Банка России</option>
                                                            <option value="methods-36"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/expobank.631df4bd.png' ?>">
                                                                Экспобанк</option>
                                                            <option value="methods-37"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                КБ
                                                                АГРОПРОМКРЕДИТ</option>
                                                            <option value="methods-38"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Кубаньторгбанк</option>
                                                            <option value="methods-39"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                БыстроБанк</option>
                                                            <option value="methods-40"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                НИКО-БАНК</option>
                                                            <option value="methods-41"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                Объединенный капитал</option>
                                                            <option value="methods-42"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                ПСКБ</option>
                                                            <option value="methods-43"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                Заречье</option>
                                                            <option value="methods-44"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Земский
                                                                банк</option>
                                                            <option value="methods-45"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                АБ
                                                                РОССИЯ</option>
                                                            <option value="methods-46"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                БКС
                                                                Банк</option>
                                                            <option value="methods-47"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                ЧЕЛЯБИНВЕСТБАНК</option>
                                                            <option value="methods-48"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Датабанк</option>
                                                            <option value="methods-49"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                ДОМ.РФ</option>
                                                            <option value="methods-50"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Энергобанк</option>
                                                            <option value="methods-51"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Форштадт</option>
                                                            <option value="methods-52"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Газтрансбанк</option>
                                                            <option value="methods-53"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Газэнергобанк</option>
                                                            <option value="methods-54"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Инбанк</option>
                                                            <option value="methods-55"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                ИТУРУП</option>
                                                            <option value="methods-56"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Кузнецкбизнесбанк</option>
                                                            <option value="methods-57"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Хакасский
                                                                муниципальный банк</option>
                                                            <option value="methods-58"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Кубань
                                                                Кредит</option>
                                                            <option value="methods-59"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                КОШЕЛЕВ-БАНК</option>
                                                            <option value="methods-60"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                Кремлевский</option>
                                                            <option value="methods-61"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                МОРСКОЙ
                                                                БАНК</option>
                                                            <option value="methods-62"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                БАНК
                                                                МОСКВА СИТИ</option>
                                                            <option value="methods-63"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Металлинвестбанк</option>
                                                            <option value="methods-64"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                КБ
                                                                Модульбанк</option>
                                                            <option value="methods-65"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Мир
                                                                Привилегий (МП Банк)</option>
                                                            <option value="methods-66"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                НК
                                                                Банк</option>
                                                            <option value="methods-67"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Норвик
                                                                Банк</option>
                                                            <option value="methods-68"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                НОВИКОМБАНК</option>
                                                            <option value="methods-69"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Новобанк</option>
                                                            <option value="methods-70"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                НС
                                                                Банк</option>
                                                            <option value="methods-71"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                БАНК
                                                                ОРЕНБУРГ</option>
                                                            <option value="methods-72"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Кредит
                                                                Европа Банк (Россия)</option>
                                                            <option value="methods-73"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                СКБ
                                                                Примсоцбанк</option>
                                                            <option value="methods-74"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Реалист
                                                                Банк</option>
                                                            <option value="methods-75"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                РЕСО Кредит</option>
                                                            <option value="methods-76"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                СИНКО-БАНК</option>
                                                            <option value="methods-77"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                СОЦИУМ
                                                                БАНК</option>
                                                            <option value="methods-78"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                ТАТСОЦБАНК</option>
                                                            <option value="methods-79"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Тимер
                                                                Банк</option>
                                                            <option value="methods-80"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Трансстройбанк</option>
                                                            <option value="methods-81"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                Агророс</option>
                                                            <option value="methods-82"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                Акцепт</option>
                                                            <option value="methods-83"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Алеф-Банк</option>
                                                            <option value="methods-84"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                КБ
                                                                АРЕСБАНК</option>
                                                            <option value="methods-85"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                Интеза</option>
                                                            <option value="methods-86"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                КБ
                                                                Хлынов</option>
                                                            <option value="methods-87"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                КБЭР
                                                                Банк Казани</option>
                                                            <option value="methods-88"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                Санкт-Петербург</option>
                                                            <option value="methods-89"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Центр-инвест</option>
                                                            <option value="methods-90"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                БКФ</option>
                                                            <option value="methods-91"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                ЧЕЛИНДБАНК</option>
                                                            <option value="methods-92"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Углеметбанк</option>
                                                            <option value="methods-93"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Кредит
                                                                Урал Банк</option>
                                                            <option value="methods-94"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                Развитие-Столица</option>
                                                            <option value="methods-95"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Дальневосточный
                                                                банк</option>
                                                            <option value="methods-96"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                ЭЛПЛАТ</option>
                                                            <option value="methods-97"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                КБ
                                                                ЭНЕРГОТРАНСБАНК</option>
                                                            <option value="methods-98"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                ФИНАМ</option>
                                                            <option value="methods-99"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                ГАРАНТ-ИНВЕСТ
                                                                БАНК</option>
                                                            <option value="methods-100"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                ГОРБАНК</option>
                                                            <option value="methods-101"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                ГУТА-БАНК</option>
                                                            <option value="methods-102"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                ИК
                                                                Банк</option>
                                                            <option value="methods-103"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                АКБ
                                                                Ланта Банк</option>
                                                            <option value="methods-104"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                КБ
                                                                ЛОКО-Банк</option>
                                                            <option value="methods-105"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                МС
                                                                Банк Рус</option>
                                                            <option value="methods-106"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                МЕТКОМБАНК</option>
                                                            <option value="methods-107"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                МСП
                                                                Банк</option>
                                                            <option value="methods-108"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Нацинвестпромбанк</option>
                                                            <option value="methods-109"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                Национальный стандарт</option>
                                                            <option value="methods-110"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                Левобережный</option>
                                                            <option value="methods-111"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                КБ
                                                                Пойдём</option>
                                                            <option value="methods-112"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                Приморье</option>
                                                            <option value="methods-113"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                ПроБанк</option>
                                                            <option value="methods-114"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                РосДорБанк</option>
                                                            <option value="methods-115"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                СДМ-Банк</option>
                                                            <option value="methods-116"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Северный
                                                                Народный Банк</option>
                                                            <option value="methods-117"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                СИБСОЦБАНК</option>
                                                            <option value="methods-118"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                БАНК
                                                                СНГБ</option>
                                                            <option value="methods-119"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Таврический
                                                                Банк</option>
                                                            <option value="methods-120"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                АКБ
                                                                Тендер Банк</option>
                                                            <option value="methods-121"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Тольяттихимбанк</option>
                                                            <option value="methods-122"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Томскпромстройбанк</option>
                                                            <option value="methods-123"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                ЮниКредит
                                                                Банк</option>
                                                            <option value="methods-124"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Урал
                                                                ФД</option>
                                                            <option value="methods-125"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                ВБРР</option>
                                                            <option value="methods-126"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                Венец</option>
                                                            <option value="methods-127"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                ВНЕШФИНБАНК</option>
                                                            <option value="methods-128"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                ЗЕНИТ</option>
                                                            <option value="methods-129"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/yoomoney.26d28df6.png' ?>">
                                                                ЮМани</option>
                                                            <option value="methods-130"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Авто
                                                                Финанс Банк</option>
                                                            <option value="methods-131"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Автоторгбанк</option>
                                                            <option value="methods-132"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Азиатско-Тихоокеанский
                                                                Банк</option>
                                                            <option value="methods-133"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                АКБ
                                                                Держава</option>
                                                            <option value="methods-134"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                АКБ
                                                                ЕВРОФИНАНС МОСНАРБАНК</option>
                                                            <option value="methods-135"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                АКБ
                                                                СЛАВИЯ</option>
                                                            <option value="methods-136"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                АКИБАНК</option>
                                                            <option value="methods-137"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Алмазэргиэнбанк</option>
                                                            <option value="methods-138"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                Аверс</option>
                                                            <option value="methods-139"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                АЛЕКСАНДРОВСКИЙ</option>
                                                            <option value="methods-140"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                БЖФ</option>
                                                            <option value="methods-141"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                Вологжанин</option>
                                                            <option value="methods-142"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                ИПБ</option>
                                                            <option value="methods-143"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                МБА МОСКВА</option>
                                                            <option value="methods-144"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                банк
                                                                Раунд</option>
                                                            <option value="methods-145"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                Саратов</option>
                                                            <option value="methods-146"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                Снежинский</option>
                                                            <option value="methods-147"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                Финсервис</option>
                                                            <option value="methods-148"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                банк
                                                                Элита</option>
                                                            <option value="methods-149"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                ББР
                                                                Банк</option>
                                                            <option value="methods-150"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                ВЛАДБИЗНЕСБАНК</option>
                                                            <option value="methods-151"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                ВУЗ-банк</option>
                                                            <option value="methods-152"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Драйв
                                                                Клик Банк</option>
                                                            <option value="methods-153"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                ИШБАНК</option>
                                                            <option value="methods-154"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                КБ
                                                                Крокус Банк</option>
                                                            <option value="methods-155"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                КБ
                                                                Москоммерцбанк</option>
                                                            <option value="methods-156"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                КБ
                                                                Стройлесбанк</option>
                                                            <option value="methods-157"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                МЕЖДУНАРОДНЫЙ
                                                                ФИНАНСОВЫЙ КЛУБ</option>
                                                            <option value="methods-158"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                МОСКОМБАНК</option>
                                                            <option value="methods-159"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                НБД-Банк</option>
                                                            <option value="methods-160"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                НОКССБАНК</option>
                                                            <option value="methods-161"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Первый
                                                                Инвестиционный Банк</option>
                                                            <option value="methods-162"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Прио-Внешторгбанк</option>
                                                            <option value="methods-163"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                РУСНАРБАНК</option>
                                                            <option value="methods-164"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Русьуниверсалбанк</option>
                                                            <option value="methods-165"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Ситибанк</option>
                                                            <option value="methods-166"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Солид
                                                                Банк</option>
                                                            <option value="methods-167"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Тойота
                                                                Банк</option>
                                                            <option value="methods-168"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Точка
                                                                Банк</option>
                                                            <option value="methods-169"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                УРАЛПРОМБАНК</option>
                                                            <option value="methods-170"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Хайс</option>
                                                            <option value="methods-171"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Эс-Би-Ай
                                                                Банк</option>
                                                            <option value="methods-172"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                ЮГ-Инвестбанк</option>
                                                            <option value="methods-173"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Яндекс
                                                                Банк</option>
                                                            <option value="methods-174"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                АИКБ
                                                                Енисейский объединенный
                                                                банк</option>
                                                            <option value="methods-175"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                Синара</option>
                                                            <option value="methods-176"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                Уралфинанс</option>
                                                            <option value="methods-177"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                ЦентроКредит</option>
                                                            <option value="methods-178"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                ИС
                                                                Банк</option>
                                                            <option value="methods-179"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                КБ
                                                                Долинск</option>
                                                            <option value="methods-180"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Новый
                                                                век</option>
                                                            <option value="methods-181"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                УКБ
                                                                Белгородсоцбанк</option>
                                                            <option value="methods-182"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Автоградбанк</option>
                                                            <option value="methods-183"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                Екатеринбург</option>
                                                            <option value="methods-184"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                БАНК
                                                                СГБ</option>
                                                            <option value="methods-185"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Банк
                                                                СИАБ</option>
                                                            <option value="methods-186"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                Джей
                                                                энд Ти Банк (АО)</option>
                                                            <option value="methods-187"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                МБ
                                                                Банк</option>
                                                            <option value="methods-188"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                СМП
                                                                Банк</option>
                                                            <option value="methods-189"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                                ТОЧКА
                                                                (ФК ОТКРЫТИЕ)</option>
                                                            <option value="methods-190"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/kapital_uz.6a1cd8e4.png' ?>">
                                                                Капиталбанк</option>
                                                            <option value="methods-191"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/davr_uz.a0eb8417.png' ?>">
                                                                Давр
                                                                Банк</option>
                                                            <option value="methods-192"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/infin_uz.1f270936.png' ?>">
                                                                Инфин
                                                                Банк</option>
                                                            <option value="methods-193"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/hamkor_uz.f9199a67.png' ?>">
                                                                Hamkorbank</option>
                                                            <option value="methods-194"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/ipakyuli_uz.0876dffb.png' ?>">
                                                                Ipak
                                                                yuli Bank</option>
                                                            <option value="methods-195"
                                                                data-image="<?= get_template_directory_uri() . '/assets/img/methods/ipoteka_uz.27686605.png' ?>">
                                                                Ипотека
                                                                Б</option>
                                                        </select>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="form-group mb-2 me-2 col-md-3 col-lg-3 col-xl-2">
                                                <div class="col p-0">
                                                    <form>
                                                        <select id="statuses_req" name="statuses_req">
                                                            <option value="none" selected disabled hidden>Статус
                                                            </option>
                                                            <option value="statuses_req-0">активный</option>
                                                            <option value="statuses_req-1">неактивный</option>
                                                        </select>
                                                    </form>
                                                </div>
                                            </div>
                                            <!---->
                                            <div class="form-group mb-2 col">
                                                <div class="col-auto p-0 text-end"><button type="button"
                                                        class="btn btn-outline-primary btn-sm rounded-pill me-2 text-capitalize-first">применить</button><button
                                                        type="button" id="reset-button"
                                                        class="btn btn-outline-secondary btn-sm rounded-pill text-capitalize-first">сбросить</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="card card-body">
                                        <div class="row">
                                            <div class="form-group col-sm-12"><button type="button"
                                                    id="generateRows_devices"
                                                    class="btn btn-outline-dark btn-sm rounded-pill text-capitalize"><i
                                                        class="fa fa-mobile-screen-button"></i>
                                                    устройства</button><button type="button" id="generateRows_groups"
                                                    class="btn btn-outline-dark btn-sm ms-2 rounded-pill text-capitalize">Группы</button><button
                                                    type="button"
                                                    class="btn btn-outline-dark btn-sm rounded-pill float-end text-capitalize"><i
                                                        class="fa fa-plus"></i> создать</button></div>
                                        </div>
                                        <div class="overflow-auto">
                                            <table
                                                class="table table-striped border-light align-middle text-left text-nowrap position-relative">
                                                <thead>
                                                    <tr>
                                                        <!---->
                                                        <th class="text-capitalize-first">устройство</th>
                                                        <th class="text-capitalize-first">реквизиты</th>
                                                        <th class="text-capitalize-first">Группа</th>
                                                        <th class="text-capitalize-first">валюта</th>
                                                        <th class="text-capitalize-first">лимиты по суммам
                                                        </th>
                                                        <th class="text-capitalize-first">Лимиты по обьему
                                                        </th>
                                                        <th class="text-capitalize-first text-wrap" style="width: 0px;">
                                                            Одновременных сделок</th>
                                                        <th class="text-capitalize-first">Статус</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody id="requisites_table">
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id='requisites_devices' tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Устройства</h5><button type="button" class="btn-close_devices btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <div class="loader-wrapper h-100">
                        <div class="p-3">
                            <div class="overflow-auto">
                                <table
                                    class="table requisites table-striped border-light align-middle text-left text-nowrap position-relative">
                                    <thead>
                                        <tr>
                                            <th class="text-capitalize-first w-25">ID</th>
                                            <th class="text-capitalize-first">имя</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="deviceTableBody">
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" class="text-center"><button type="button"
                                                    class="btn btn-sm btn-outline-dark text-nowrap text-capitalize-first w-100"><i
                                                        class="fa fa-plus"></i> добавить</button></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!---->
                    </div>
                </div>
                <div class="modal-footer"><button type="button"
                        class="btn btn-outline-secondary btn-sm text-capitalize-first btn-close_devices2">закрыть</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id='requisites_group' tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Группы</h5><button type="button" class="btn-close_group btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <div class="loader-wrapper h-100">
                        <div class="p-3">
                            <div class="overflow-auto">
                                <table
                                    class="table group table-striped border-light align-middle text-left text-nowrap position-relative">
                                    <thead>
                                        <tr>
                                            <th class="text-capitalize-first w-25">ID</th>
                                            <th class="text-capitalize-first">имя</th>
                                            <th class="text-capitalize-first">Всего реквизитов</th>
                                            <th class="text-capitalize-first">Активных</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id='groupTableBody'>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5" class="text-center"><button type="button"
                                                    class="btn btn-sm btn-outline-dark text-nowrap text-capitalize-first w-100"><i
                                                        class="fa fa-plus"></i> добавить</button></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!---->
                    </div>
                </div>
                <div class="modal-footer"><button type="button"
                        class="btn btn-outline-secondary btn-sm text-capitalize-first btn-close_group2">закрыть</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id='requisites_create' tabindex="-1" style="display: none; z-index: 2;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Новые реквизиты</h5><button type="button" class="btn-close_create btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <form>
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <div class="row mt-2"><label id="statusLabel1"
                                        class="inactive-label col-sm-4 col-form-label text-capitalize-first">неактивный</label>
                                    <div class="col-sm-8 form-check form-switch d-flex align-items-center"><input
                                            id="isActive1" class="form-check-input" style="cursor: pointer;"
                                            type="checkbox" role="switch"></div>
                                </div>
                                <div class="row mt-2"><label for="currency"
                                        class="col-sm-4 col-form-label text-capitalize-first">валюта</label>
                                    <div class="col-sm-8">
                                        <form>
                                            <select id="currencies2" name="currencies2">
                                                <option value="none" selected disabled hidden>Валюты
                                                </option>
                                                <option value="currencies-0">RUB</option>
                                                <option value="currencies-1">UZS</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <div class="row mt-2"><label for="paymentOption"
                                        class="col-sm-4 col-form-label text-capitalize-first">Способ оплаты</label>
                                    <div class="col-sm-8">
                                        <form>
                                            <select id="type2" name="type2">
                                                <option value="none" selected disabled hidden>Валюты
                                                </option>
                                                <option value="type2-0">СБП</option>
                                                <option value="type2-1">Перевод на карту</option>
                                                <option value="type2-2">Перевод по номеру счета</option>
                                                <option value="type2-3">Трансграничный перевод</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <div class="row mt-2"><label for="method"
                                        class="col-sm-4 col-form-label text-capitalize-first">Банк</label>
                                    <div class="col-sm-8">
                                        <div>
                                            <form>
                                                <select id="methods">
                                                    <option value="none"></option>
                                                    <option value="methods-0"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Неизвестен</option>
                                                    <option value="methods-1"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/tinkoff.31211ca6.png' ?>">
                                                        Тинькофф</option>
                                                    <option value="methods-2"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/sberbank.b3f2cde9.png' ?>">
                                                        Сбербанк</option>
                                                    <option value="methods-3"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/alfa.png' ?>">
                                                        Альфа-Банк</option>
                                                    <option value="methods-4"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/vtb.png' ?>">
                                                        ВТБ</option>
                                                    <option value="methods-5"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/rosselhozbank.1474e967.png' ?>">
                                                        Россельхозбанк</option>
                                                    <option value="methods-6"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/raiffeisenbank.59da2009.png' ?>">
                                                        Райффайзенбанк</option>
                                                    <option value="methods-7"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/rsb.51ad948f.png' ?>">
                                                        Российский
                                                        Стандарт</option>
                                                    <option value="methods-8"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/promsvyaz.523dfc2c.png' ?>">
                                                        Промсвязьбанк</option>
                                                    <option value="methods-9"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/gazprombank.ba7980ff.png' ?>">
                                                        Газпромбанк</option>
                                                    <option value="methods-10"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/bank_open.2bb9dce2.png' ?>">
                                                        Банк
                                                        Открытие</option>
                                                    <option value="methods-11"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/ubrib.068e80aa.png' ?>">
                                                        Банк
                                                        УБРиР</option>
                                                    <option value="methods-12"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/mkb.f8ef2f20.png' ?>">
                                                        Московский
                                                        кредитный банк</option>
                                                    <option value="methods-13"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/home_bank.d24757cf.png' ?>">
                                                        Хоум
                                                        Банк</option>
                                                    <option value="methods-14"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/otp_bank.e5f1cb15.png' ?>">
                                                        ОТП
                                                        Банк</option>
                                                    <option value="methods-15"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/uralsib.24e1c4be.png' ?>">
                                                        Уралсиб</option>
                                                    <option value="methods-16"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/ak_bars_bank.1778d63b.png' ?>">
                                                        Ак
                                                        Барс</option>
                                                    <option value="methods-17"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/ros_bank.a85d8932.png' ?>">
                                                        Росбанк</option>
                                                    <option value="methods-18"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/fora.02426183.png' ?>">
                                                        Фора-банк</option>
                                                    <option value="methods-19"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/absolute_bank.dfcbc270.png' ?>">
                                                        Абсолют
                                                        Банк</option>
                                                    <option value="methods-20"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/rost_finance.62396604.png' ?>">
                                                        РостФинанс
                                                        Банк</option>
                                                    <option value="methods-21"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/ozon.584de2e9.png' ?>">
                                                        Ozon
                                                        Банк</option>
                                                    <option value="methods-22"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unistream.60647c58.png' ?>">
                                                        Юнистрим</option>
                                                    <option value="methods-23"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/mts.8d2a6abd.png' ?>">
                                                        МТС
                                                        Банк</option>
                                                    <option value="methods-24"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/tkb.924caaf8.png' ?>">
                                                        ТрансКапиталБанк</option>
                                                    <option value="methods-25"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/pochta.834c0104.png' ?>">
                                                        Почта
                                                        Банк</option>
                                                    <option value="methods-26"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/rncb.362c0872.png' ?>">
                                                        РНКБ</option>
                                                    <option value="methods-27"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/genbank.021557b4.png' ?>">
                                                        Генбанк</option>
                                                    <option value="methods-28"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/sovkom.10210a94.png' ?>">
                                                        Совкомбанк</option>
                                                    <option value="methods-29"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/cifra.4f72db79.png' ?>">
                                                        Цифра
                                                        банк</option>
                                                    <option value="methods-30"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/ingo.cdc011f9.png' ?>">
                                                        Ингосстрах
                                                        Банк</option>
                                                    <option value="methods-31"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/svoi.3c6448ab.png' ?>">
                                                        Свой
                                                        Банк</option>
                                                    <option value="methods-32"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/avangard.646d3aca.png' ?>">
                                                        Авангард</option>
                                                    <option value="methods-33"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/rencredit.1a119ffe.png' ?>">
                                                        Ренессанс
                                                        Банк</option>
                                                    <option value="methods-34"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/solid.18fcfee7.png' ?>">
                                                        Солидарность</option>
                                                    <option value="methods-35"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/pucbr.3e5c68a5.png' ?>">
                                                        ПУ
                                                        Банка России</option>
                                                    <option value="methods-36"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/expobank.631df4bd.png' ?>">
                                                        Экспобанк</option>
                                                    <option value="methods-37"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        КБ
                                                        АГРОПРОМКРЕДИТ</option>
                                                    <option value="methods-38"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Кубаньторгбанк</option>
                                                    <option value="methods-39"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        БыстроБанк</option>
                                                    <option value="methods-40"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        НИКО-БАНК</option>
                                                    <option value="methods-41"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Объединенный капитал</option>
                                                    <option value="methods-42"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        ПСКБ</option>
                                                    <option value="methods-43"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Заречье</option>
                                                    <option value="methods-44"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Земский
                                                        банк</option>
                                                    <option value="methods-45"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        АБ
                                                        РОССИЯ</option>
                                                    <option value="methods-46"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        БКС
                                                        Банк</option>
                                                    <option value="methods-47"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ЧЕЛЯБИНВЕСТБАНК</option>
                                                    <option value="methods-48"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Датабанк</option>
                                                    <option value="methods-49"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        ДОМ.РФ</option>
                                                    <option value="methods-50"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Энергобанк</option>
                                                    <option value="methods-51"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Форштадт</option>
                                                    <option value="methods-52"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Газтрансбанк</option>
                                                    <option value="methods-53"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Газэнергобанк</option>
                                                    <option value="methods-54"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Инбанк</option>
                                                    <option value="methods-55"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        ИТУРУП</option>
                                                    <option value="methods-56"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Кузнецкбизнесбанк</option>
                                                    <option value="methods-57"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Хакасский
                                                        муниципальный банк</option>
                                                    <option value="methods-58"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Кубань
                                                        Кредит</option>
                                                    <option value="methods-59"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        КОШЕЛЕВ-БАНК</option>
                                                    <option value="methods-60"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Кремлевский</option>
                                                    <option value="methods-61"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        МОРСКОЙ
                                                        БАНК</option>
                                                    <option value="methods-62"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        БАНК
                                                        МОСКВА СИТИ</option>
                                                    <option value="methods-63"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Металлинвестбанк</option>
                                                    <option value="methods-64"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        КБ
                                                        Модульбанк</option>
                                                    <option value="methods-65"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Мир
                                                        Привилегий (МП Банк)</option>
                                                    <option value="methods-66"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        НК
                                                        Банк</option>
                                                    <option value="methods-67"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Норвик
                                                        Банк</option>
                                                    <option value="methods-68"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        НОВИКОМБАНК</option>
                                                    <option value="methods-69"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Новобанк</option>
                                                    <option value="methods-70"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        НС
                                                        Банк</option>
                                                    <option value="methods-71"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        БАНК
                                                        ОРЕНБУРГ</option>
                                                    <option value="methods-72"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Кредит
                                                        Европа Банк (Россия)</option>
                                                    <option value="methods-73"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        СКБ
                                                        Примсоцбанк</option>
                                                    <option value="methods-74"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Реалист
                                                        Банк</option>
                                                    <option value="methods-75"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        РЕСО Кредит</option>
                                                    <option value="methods-76"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        СИНКО-БАНК</option>
                                                    <option value="methods-77"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        СОЦИУМ
                                                        БАНК</option>
                                                    <option value="methods-78"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ТАТСОЦБАНК</option>
                                                    <option value="methods-79"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Тимер
                                                        Банк</option>
                                                    <option value="methods-80"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Трансстройбанк</option>
                                                    <option value="methods-81"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Агророс</option>
                                                    <option value="methods-82"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Акцепт</option>
                                                    <option value="methods-83"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Алеф-Банк</option>
                                                    <option value="methods-84"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        КБ
                                                        АРЕСБАНК</option>
                                                    <option value="methods-85"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Интеза</option>
                                                    <option value="methods-86"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        КБ
                                                        Хлынов</option>
                                                    <option value="methods-87"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        КБЭР
                                                        Банк Казани</option>
                                                    <option value="methods-88"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Санкт-Петербург</option>
                                                    <option value="methods-89"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Центр-инвест</option>
                                                    <option value="methods-90"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        БКФ</option>
                                                    <option value="methods-91"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ЧЕЛИНДБАНК</option>
                                                    <option value="methods-92"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Углеметбанк</option>
                                                    <option value="methods-93"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Кредит
                                                        Урал Банк</option>
                                                    <option value="methods-94"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Развитие-Столица</option>
                                                    <option value="methods-95"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Дальневосточный
                                                        банк</option>
                                                    <option value="methods-96"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ЭЛПЛАТ</option>
                                                    <option value="methods-97"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        КБ
                                                        ЭНЕРГОТРАНСБАНК</option>
                                                    <option value="methods-98"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        ФИНАМ</option>
                                                    <option value="methods-99"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ГАРАНТ-ИНВЕСТ
                                                        БАНК</option>
                                                    <option value="methods-100"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ГОРБАНК</option>
                                                    <option value="methods-101"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ГУТА-БАНК</option>
                                                    <option value="methods-102"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ИК
                                                        Банк</option>
                                                    <option value="methods-103"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        АКБ
                                                        Ланта Банк</option>
                                                    <option value="methods-104"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        КБ
                                                        ЛОКО-Банк</option>
                                                    <option value="methods-105"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        МС
                                                        Банк Рус</option>
                                                    <option value="methods-106"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        МЕТКОМБАНК</option>
                                                    <option value="methods-107"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        МСП
                                                        Банк</option>
                                                    <option value="methods-108"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Нацинвестпромбанк</option>
                                                    <option value="methods-109"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Национальный стандарт</option>
                                                    <option value="methods-110"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Левобережный</option>
                                                    <option value="methods-111"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        КБ
                                                        Пойдём</option>
                                                    <option value="methods-112"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Приморье</option>
                                                    <option value="methods-113"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ПроБанк</option>
                                                    <option value="methods-114"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        РосДорБанк</option>
                                                    <option value="methods-115"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        СДМ-Банк</option>
                                                    <option value="methods-116"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Северный
                                                        Народный Банк</option>
                                                    <option value="methods-117"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        СИБСОЦБАНК</option>
                                                    <option value="methods-118"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        БАНК
                                                        СНГБ</option>
                                                    <option value="methods-119"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Таврический
                                                        Банк</option>
                                                    <option value="methods-120"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        АКБ
                                                        Тендер Банк</option>
                                                    <option value="methods-121"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Тольяттихимбанк</option>
                                                    <option value="methods-122"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Томскпромстройбанк</option>
                                                    <option value="methods-123"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ЮниКредит
                                                        Банк</option>
                                                    <option value="methods-124"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Урал
                                                        ФД</option>
                                                    <option value="methods-125"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        ВБРР</option>
                                                    <option value="methods-126"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Венец</option>
                                                    <option value="methods-127"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ВНЕШФИНБАНК</option>
                                                    <option value="methods-128"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        ЗЕНИТ</option>
                                                    <option value="methods-129"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/yoomoney.26d28df6.png' ?>">
                                                        ЮМани</option>
                                                    <option value="methods-130"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Авто
                                                        Финанс Банк</option>
                                                    <option value="methods-131"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Автоторгбанк</option>
                                                    <option value="methods-132"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Азиатско-Тихоокеанский
                                                        Банк</option>
                                                    <option value="methods-133"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        АКБ
                                                        Держава</option>
                                                    <option value="methods-134"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        АКБ
                                                        ЕВРОФИНАНС МОСНАРБАНК</option>
                                                    <option value="methods-135"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        АКБ
                                                        СЛАВИЯ</option>
                                                    <option value="methods-136"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        АКИБАНК</option>
                                                    <option value="methods-137"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Алмазэргиэнбанк</option>
                                                    <option value="methods-138"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Аверс</option>
                                                    <option value="methods-139"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        АЛЕКСАНДРОВСКИЙ</option>
                                                    <option value="methods-140"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        БЖФ</option>
                                                    <option value="methods-141"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Вологжанин</option>
                                                    <option value="methods-142"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        ИПБ</option>
                                                    <option value="methods-143"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        МБА МОСКВА</option>
                                                    <option value="methods-144"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        банк
                                                        Раунд</option>
                                                    <option value="methods-145"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Саратов</option>
                                                    <option value="methods-146"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Снежинский</option>
                                                    <option value="methods-147"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Финсервис</option>
                                                    <option value="methods-148"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        банк
                                                        Элита</option>
                                                    <option value="methods-149"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ББР
                                                        Банк</option>
                                                    <option value="methods-150"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ВЛАДБИЗНЕСБАНК</option>
                                                    <option value="methods-151"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ВУЗ-банк</option>
                                                    <option value="methods-152"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Драйв
                                                        Клик Банк</option>
                                                    <option value="methods-153"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ИШБАНК</option>
                                                    <option value="methods-154"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        КБ
                                                        Крокус Банк</option>
                                                    <option value="methods-155"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        КБ
                                                        Москоммерцбанк</option>
                                                    <option value="methods-156"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        КБ
                                                        Стройлесбанк</option>
                                                    <option value="methods-157"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        МЕЖДУНАРОДНЫЙ
                                                        ФИНАНСОВЫЙ КЛУБ</option>
                                                    <option value="methods-158"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        МОСКОМБАНК</option>
                                                    <option value="methods-159"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        НБД-Банк</option>
                                                    <option value="methods-160"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        НОКССБАНК</option>
                                                    <option value="methods-161"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Первый
                                                        Инвестиционный Банк</option>
                                                    <option value="methods-162"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Прио-Внешторгбанк</option>
                                                    <option value="methods-163"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        РУСНАРБАНК</option>
                                                    <option value="methods-164"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Русьуниверсалбанк</option>
                                                    <option value="methods-165"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Ситибанк</option>
                                                    <option value="methods-166"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Солид
                                                        Банк</option>
                                                    <option value="methods-167"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Тойота
                                                        Банк</option>
                                                    <option value="methods-168"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Точка
                                                        Банк</option>
                                                    <option value="methods-169"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        УРАЛПРОМБАНК</option>
                                                    <option value="methods-170"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Хайс</option>
                                                    <option value="methods-171"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Эс-Би-Ай
                                                        Банк</option>
                                                    <option value="methods-172"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ЮГ-Инвестбанк</option>
                                                    <option value="methods-173"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Яндекс
                                                        Банк</option>
                                                    <option value="methods-174"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        АИКБ
                                                        Енисейский объединенный
                                                        банк</option>
                                                    <option value="methods-175"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Синара</option>
                                                    <option value="methods-176"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Уралфинанс</option>
                                                    <option value="methods-177"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        ЦентроКредит</option>
                                                    <option value="methods-178"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ИС
                                                        Банк</option>
                                                    <option value="methods-179"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        КБ
                                                        Долинск</option>
                                                    <option value="methods-180"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Новый
                                                        век</option>
                                                    <option value="methods-181"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        УКБ
                                                        Белгородсоцбанк</option>
                                                    <option value="methods-182"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Автоградбанк</option>
                                                    <option value="methods-183"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Екатеринбург</option>
                                                    <option value="methods-184"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        БАНК
                                                        СГБ</option>
                                                    <option value="methods-185"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        СИАБ</option>
                                                    <option value="methods-186"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Джей
                                                        энд Ти Банк (АО)</option>
                                                    <option value="methods-187"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        МБ
                                                        Банк</option>
                                                    <option value="methods-188"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        СМП
                                                        Банк</option>
                                                    <option value="methods-189"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ТОЧКА
                                                        (ФК ОТКРЫТИЕ)</option>
                                                    <option value="methods-190"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/kapital_uz.6a1cd8e4.png' ?>">
                                                        Капиталбанк</option>
                                                    <option value="methods-191"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/davr_uz.a0eb8417.png' ?>">
                                                        Давр
                                                        Банк</option>
                                                    <option value="methods-192"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/infin_uz.1f270936.png' ?>">
                                                        Инфин
                                                        Банк</option>
                                                    <option value="methods-193"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/hamkor_uz.f9199a67.png' ?>">
                                                        Hamkorbank</option>
                                                    <option value="methods-194"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/ipakyuli_uz.0876dffb.png' ?>">
                                                        Ipak
                                                        yuli Bank</option>
                                                    <option value="methods-195"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/ipoteka_uz.27686605.png' ?>">
                                                        Ипотека
                                                        Б</option>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!---->
                                <div class="row mt-2"><label for="requisites"
                                        class="col-sm-4 col-form-label text-capitalize-first">реквизиты</label>
                                    <div class="col-sm-8">
                                        <div><input placeholder="" class="form-control" type="text" id="requisites">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2"><label for="holderName"
                                        class="col-sm-4 col-form-label text-capitalize-first">имя владельца</label>
                                    <div class="col-sm-8">
                                        <div><input class="form-control" type="text" id="holderName"></div>
                                    </div>
                                </div>
                                <div class="row mt-2"><label for="group"
                                        class="col-sm-4 col-form-label text-capitalize-first">Группа</label>
                                    <div class="col-sm-8">
                                        <select id="groups2" name="groups2">
                                            <option value="none" selected disabled hidden>
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-4"><label for="device"
                                        class="col-sm-4 col-form-label text-capitalize-first">устройство</label>
                                    <div class="col-sm-8">
                                        <select id="devices2" name="devices2">
                                            <option value="none" selected disabled hidden>
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-2"><label for="autoclose"
                                        class="col-sm-4 col-form-label text-capitalize-first pe-2">Автоматическое
                                        подтверждение сделок</label>
                                    <div class="col-sm-8 form-check form-switch d-flex align-items-center gap-2"><input
                                            id="autoclose1" class="form-check-input autoclose" style="cursor: pointer;"
                                            type="checkbox" role="switch"><span class="inactive-label">выключено</span>
                                    </div>
                                </div>
                                <div class="row mt-2"><label
                                        class="col-sm-12 col-form-label text-center text-capitalize-first">лимиты</label>
                                </div>
                                <div class="row"><label for="minPayInDealSum"
                                        class="col-sm-3 col-form-label text-capitalize-first pe-2 text-end">Мин. сумма
                                        сделки</label>
                                    <div class="col-sm-3">
                                        <div><input class="form-control" type="number" id="minPayInDealSum"></div>
                                    </div><label for="maxPayInDealSum"
                                        class="col-sm-3 col-form-label text-capitalize-first pe-2 text-end">Макс. сумма
                                        сделки</label>
                                    <div class="col-sm-3">
                                        <div><input class="form-control" type="number" id="maxPayInDealSum"></div>
                                    </div>
                                </div>
                                <div class="row mt-2"><label for="dayTradesSumLimit"
                                        class="col-sm-3 col-form-label text-capitalize-first pe-2 text-end">сумма
                                        (день)</label>
                                    <div class="col-sm-3">
                                        <div><input class="form-control" type="number" id="dayTradesSumLimit"></div>
                                    </div><label for="monthTradesSumLimit"
                                        class="col-sm-3 col-form-label text-capitalize-first pe-2 text-end">сумма
                                        (месяц)</label>
                                    <div class="col-sm-3">
                                        <div><input class="form-control" type="number" id="monthTradesSumLimit"></div>
                                    </div>
                                </div>
                                <div class="row mt-2"><label for="concurrentTradesCount"
                                        class="col-sm-3 col-form-label text-capitalize-first pe-2 text-end">Одновременных
                                        сделок</label>
                                    <div class="col-sm-3">
                                        <div><input class="form-control" type="number" id="concurrentTradesCount"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer"><button type="button"
                        class="btn btn-outline-secondary btn-sm text-capitalize-first btn-close_create2">отменить</button>
                    <div class="loader-wrapper"><button type="button" id="submit"
                            class="btn btn-outline-primary btn-sm text-capitalize-first">сохранить</button>
                        <!---->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id='requisites_edit' tabindex="-1" style="display: none; z-index: 2;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Изменить реквизиты</h5><button type="button"
                        class="btn-close_create btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <form>
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <div class="row mt-2"><label id="statusLabel2"
                                        class="inactive-label col-sm-4 col-form-label text-capitalize-first">неактивный</label>
                                    <div class="col-sm-8 form-check form-switch d-flex align-items-center"><input
                                            class="form-check-input isActive back" style="cursor: pointer;"
                                            type="checkbox" role="switch"></div>
                                </div>
                                <div class="row mt-2"><label for="currency"
                                        class="col-sm-4 col-form-label text-capitalize-first">валюта</label>
                                    <div class="col-sm-8">
                                        <form>
                                            <select id="currencies3" name="currencies2">
                                                <option value="none" selected disabled hidden>Валюты
                                                </option>
                                                <option value="currencies-0">RUB</option>
                                                <option value="currencies-1">UZS</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <div class="row mt-2"><label for="paymentOption"
                                        class="col-sm-4 col-form-label text-capitalize-first">Способ оплаты</label>
                                    <div class="col-sm-8">
                                        <form>
                                            <select id="type3" name="type2">
                                                <option value="none" selected disabled hidden>Валюты
                                                </option>
                                                <option value="type2-0">СБП</option>
                                                <option value="type2-1">Перевод на карту</option>
                                                <option value="type2-2">Перевод по номеру счета</option>
                                                <option value="type2-3">Трансграничный перевод</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <div class="row mt-2"><label for="method"
                                        class="col-sm-4 col-form-label text-capitalize-first">Банк</label>
                                    <div class="col-sm-8">
                                        <div>
                                            <form>
                                                <select id="methods2">
                                                    <option value="none"></option>
                                                    <option value="methods-0"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Неизвестен</option>
                                                    <option value="methods-1"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/tinkoff.31211ca6.png' ?>">
                                                        Тинькофф</option>
                                                    <option value="methods-2"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/sberbank.b3f2cde9.png' ?>">
                                                        Сбербанк</option>
                                                    <option value="methods-3"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/alfa.png' ?>">
                                                        Альфа-Банк</option>
                                                    <option value="methods-4"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/vtb.png' ?>">
                                                        ВТБ</option>
                                                    <option value="methods-5"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/rosselhozbank.1474e967.png' ?>">
                                                        Россельхозбанк</option>
                                                    <option value="methods-6"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/raiffeisenbank.59da2009.png' ?>">
                                                        Райффайзенбанк</option>
                                                    <option value="methods-7"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/rsb.51ad948f.png' ?>">
                                                        Российский
                                                        Стандарт</option>
                                                    <option value="methods-8"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/promsvyaz.523dfc2c.png' ?>">
                                                        Промсвязьбанк</option>
                                                    <option value="methods-9"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/gazprombank.ba7980ff.png' ?>">
                                                        Газпромбанк</option>
                                                    <option value="methods-10"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/bank_open.2bb9dce2.png' ?>">
                                                        Банк
                                                        Открытие</option>
                                                    <option value="methods-11"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/ubrib.068e80aa.png' ?>">
                                                        Банк
                                                        УБРиР</option>
                                                    <option value="methods-12"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/mkb.f8ef2f20.png' ?>">
                                                        Московский
                                                        кредитный банк</option>
                                                    <option value="methods-13"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/home_bank.d24757cf.png' ?>">
                                                        Хоум
                                                        Банк</option>
                                                    <option value="methods-14"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/otp_bank.e5f1cb15.png' ?>">
                                                        ОТП
                                                        Банк</option>
                                                    <option value="methods-15"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/uralsib.24e1c4be.png' ?>">
                                                        Уралсиб</option>
                                                    <option value="methods-16"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/ak_bars_bank.1778d63b.png' ?>">
                                                        Ак
                                                        Барс</option>
                                                    <option value="methods-17"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/ros_bank.a85d8932.png' ?>">
                                                        Росбанк</option>
                                                    <option value="methods-18"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/fora.02426183.png' ?>">
                                                        Фора-банк</option>
                                                    <option value="methods-19"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/absolute_bank.dfcbc270.png' ?>">
                                                        Абсолют
                                                        Банк</option>
                                                    <option value="methods-20"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/rost_finance.62396604.png' ?>">
                                                        РостФинанс
                                                        Банк</option>
                                                    <option value="methods-21"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/ozon.584de2e9.png' ?>">
                                                        Ozon
                                                        Банк</option>
                                                    <option value="methods-22"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unistream.60647c58.png' ?>">
                                                        Юнистрим</option>
                                                    <option value="methods-23"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/mts.8d2a6abd.png' ?>">
                                                        МТС
                                                        Банк</option>
                                                    <option value="methods-24"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/tkb.924caaf8.png' ?>">
                                                        ТрансКапиталБанк</option>
                                                    <option value="methods-25"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/pochta.834c0104.png' ?>">
                                                        Почта
                                                        Банк</option>
                                                    <option value="methods-26"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/rncb.362c0872.png' ?>">
                                                        РНКБ</option>
                                                    <option value="methods-27"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/genbank.021557b4.png' ?>">
                                                        Генбанк</option>
                                                    <option value="methods-28"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/sovkom.10210a94.png' ?>">
                                                        Совкомбанк</option>
                                                    <option value="methods-29"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/cifra.4f72db79.png' ?>">
                                                        Цифра
                                                        банк</option>
                                                    <option value="methods-30"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/ingo.cdc011f9.png' ?>">
                                                        Ингосстрах
                                                        Банк</option>
                                                    <option value="methods-31"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/svoi.3c6448ab.png' ?>">
                                                        Свой
                                                        Банк</option>
                                                    <option value="methods-32"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/avangard.646d3aca.png' ?>">
                                                        Авангард</option>
                                                    <option value="methods-33"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/rencredit.1a119ffe.png' ?>">
                                                        Ренессанс
                                                        Банк</option>
                                                    <option value="methods-34"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/solid.18fcfee7.png' ?>">
                                                        Солидарность</option>
                                                    <option value="methods-35"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/pucbr.3e5c68a5.png' ?>">
                                                        ПУ
                                                        Банка России</option>
                                                    <option value="methods-36"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/expobank.631df4bd.png' ?>">
                                                        Экспобанк</option>
                                                    <option value="methods-37"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        КБ
                                                        АГРОПРОМКРЕДИТ</option>
                                                    <option value="methods-38"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Кубаньторгбанк</option>
                                                    <option value="methods-39"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        БыстроБанк</option>
                                                    <option value="methods-40"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        НИКО-БАНК</option>
                                                    <option value="methods-41"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Объединенный капитал</option>
                                                    <option value="methods-42"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        ПСКБ</option>
                                                    <option value="methods-43"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Заречье</option>
                                                    <option value="methods-44"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Земский
                                                        банк</option>
                                                    <option value="methods-45"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        АБ
                                                        РОССИЯ</option>
                                                    <option value="methods-46"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        БКС
                                                        Банк</option>
                                                    <option value="methods-47"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ЧЕЛЯБИНВЕСТБАНК</option>
                                                    <option value="methods-48"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Датабанк</option>
                                                    <option value="methods-49"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        ДОМ.РФ</option>
                                                    <option value="methods-50"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Энергобанк</option>
                                                    <option value="methods-51"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Форштадт</option>
                                                    <option value="methods-52"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Газтрансбанк</option>
                                                    <option value="methods-53"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Газэнергобанк</option>
                                                    <option value="methods-54"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Инбанк</option>
                                                    <option value="methods-55"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        ИТУРУП</option>
                                                    <option value="methods-56"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Кузнецкбизнесбанк</option>
                                                    <option value="methods-57"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Хакасский
                                                        муниципальный банк</option>
                                                    <option value="methods-58"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Кубань
                                                        Кредит</option>
                                                    <option value="methods-59"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        КОШЕЛЕВ-БАНК</option>
                                                    <option value="methods-60"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Кремлевский</option>
                                                    <option value="methods-61"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        МОРСКОЙ
                                                        БАНК</option>
                                                    <option value="methods-62"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        БАНК
                                                        МОСКВА СИТИ</option>
                                                    <option value="methods-63"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Металлинвестбанк</option>
                                                    <option value="methods-64"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        КБ
                                                        Модульбанк</option>
                                                    <option value="methods-65"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Мир
                                                        Привилегий (МП Банк)</option>
                                                    <option value="methods-66"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        НК
                                                        Банк</option>
                                                    <option value="methods-67"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Норвик
                                                        Банк</option>
                                                    <option value="methods-68"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        НОВИКОМБАНК</option>
                                                    <option value="methods-69"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Новобанк</option>
                                                    <option value="methods-70"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        НС
                                                        Банк</option>
                                                    <option value="methods-71"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        БАНК
                                                        ОРЕНБУРГ</option>
                                                    <option value="methods-72"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Кредит
                                                        Европа Банк (Россия)</option>
                                                    <option value="methods-73"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        СКБ
                                                        Примсоцбанк</option>
                                                    <option value="methods-74"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Реалист
                                                        Банк</option>
                                                    <option value="methods-75"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        РЕСО Кредит</option>
                                                    <option value="methods-76"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        СИНКО-БАНК</option>
                                                    <option value="methods-77"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        СОЦИУМ
                                                        БАНК</option>
                                                    <option value="methods-78"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ТАТСОЦБАНК</option>
                                                    <option value="methods-79"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Тимер
                                                        Банк</option>
                                                    <option value="methods-80"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Трансстройбанк</option>
                                                    <option value="methods-81"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Агророс</option>
                                                    <option value="methods-82"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Акцепт</option>
                                                    <option value="methods-83"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Алеф-Банк</option>
                                                    <option value="methods-84"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        КБ
                                                        АРЕСБАНК</option>
                                                    <option value="methods-85"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Интеза</option>
                                                    <option value="methods-86"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        КБ
                                                        Хлынов</option>
                                                    <option value="methods-87"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        КБЭР
                                                        Банк Казани</option>
                                                    <option value="methods-88"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Санкт-Петербург</option>
                                                    <option value="methods-89"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Центр-инвест</option>
                                                    <option value="methods-90"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        БКФ</option>
                                                    <option value="methods-91"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ЧЕЛИНДБАНК</option>
                                                    <option value="methods-92"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Углеметбанк</option>
                                                    <option value="methods-93"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Кредит
                                                        Урал Банк</option>
                                                    <option value="methods-94"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Развитие-Столица</option>
                                                    <option value="methods-95"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Дальневосточный
                                                        банк</option>
                                                    <option value="methods-96"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ЭЛПЛАТ</option>
                                                    <option value="methods-97"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        КБ
                                                        ЭНЕРГОТРАНСБАНК</option>
                                                    <option value="methods-98"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        ФИНАМ</option>
                                                    <option value="methods-99"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ГАРАНТ-ИНВЕСТ
                                                        БАНК</option>
                                                    <option value="methods-100"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ГОРБАНК</option>
                                                    <option value="methods-101"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ГУТА-БАНК</option>
                                                    <option value="methods-102"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ИК
                                                        Банк</option>
                                                    <option value="methods-103"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        АКБ
                                                        Ланта Банк</option>
                                                    <option value="methods-104"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        КБ
                                                        ЛОКО-Банк</option>
                                                    <option value="methods-105"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        МС
                                                        Банк Рус</option>
                                                    <option value="methods-106"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        МЕТКОМБАНК</option>
                                                    <option value="methods-107"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        МСП
                                                        Банк</option>
                                                    <option value="methods-108"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Нацинвестпромбанк</option>
                                                    <option value="methods-109"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Национальный стандарт</option>
                                                    <option value="methods-110"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Левобережный</option>
                                                    <option value="methods-111"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        КБ
                                                        Пойдём</option>
                                                    <option value="methods-112"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Приморье</option>
                                                    <option value="methods-113"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ПроБанк</option>
                                                    <option value="methods-114"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        РосДорБанк</option>
                                                    <option value="methods-115"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        СДМ-Банк</option>
                                                    <option value="methods-116"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Северный
                                                        Народный Банк</option>
                                                    <option value="methods-117"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        СИБСОЦБАНК</option>
                                                    <option value="methods-118"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        БАНК
                                                        СНГБ</option>
                                                    <option value="methods-119"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Таврический
                                                        Банк</option>
                                                    <option value="methods-120"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        АКБ
                                                        Тендер Банк</option>
                                                    <option value="methods-121"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Тольяттихимбанк</option>
                                                    <option value="methods-122"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Томскпромстройбанк</option>
                                                    <option value="methods-123"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ЮниКредит
                                                        Банк</option>
                                                    <option value="methods-124"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Урал
                                                        ФД</option>
                                                    <option value="methods-125"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        ВБРР</option>
                                                    <option value="methods-126"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Венец</option>
                                                    <option value="methods-127"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ВНЕШФИНБАНК</option>
                                                    <option value="methods-128"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        ЗЕНИТ</option>
                                                    <option value="methods-129"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/yoomoney.26d28df6.png' ?>">
                                                        ЮМани</option>
                                                    <option value="methods-130"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Авто
                                                        Финанс Банк</option>
                                                    <option value="methods-131"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Автоторгбанк</option>
                                                    <option value="methods-132"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Азиатско-Тихоокеанский
                                                        Банк</option>
                                                    <option value="methods-133"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        АКБ
                                                        Держава</option>
                                                    <option value="methods-134"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        АКБ
                                                        ЕВРОФИНАНС МОСНАРБАНК</option>
                                                    <option value="methods-135"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        АКБ
                                                        СЛАВИЯ</option>
                                                    <option value="methods-136"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        АКИБАНК</option>
                                                    <option value="methods-137"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Алмазэргиэнбанк</option>
                                                    <option value="methods-138"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Аверс</option>
                                                    <option value="methods-139"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        АЛЕКСАНДРОВСКИЙ</option>
                                                    <option value="methods-140"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        БЖФ</option>
                                                    <option value="methods-141"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Вологжанин</option>
                                                    <option value="methods-142"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        ИПБ</option>
                                                    <option value="methods-143"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        МБА МОСКВА</option>
                                                    <option value="methods-144"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        банк
                                                        Раунд</option>
                                                    <option value="methods-145"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Саратов</option>
                                                    <option value="methods-146"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Снежинский</option>
                                                    <option value="methods-147"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Финсервис</option>
                                                    <option value="methods-148"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        банк
                                                        Элита</option>
                                                    <option value="methods-149"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ББР
                                                        Банк</option>
                                                    <option value="methods-150"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ВЛАДБИЗНЕСБАНК</option>
                                                    <option value="methods-151"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ВУЗ-банк</option>
                                                    <option value="methods-152"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Драйв
                                                        Клик Банк</option>
                                                    <option value="methods-153"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ИШБАНК</option>
                                                    <option value="methods-154"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        КБ
                                                        Крокус Банк</option>
                                                    <option value="methods-155"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        КБ
                                                        Москоммерцбанк</option>
                                                    <option value="methods-156"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        КБ
                                                        Стройлесбанк</option>
                                                    <option value="methods-157"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        МЕЖДУНАРОДНЫЙ
                                                        ФИНАНСОВЫЙ КЛУБ</option>
                                                    <option value="methods-158"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        МОСКОМБАНК</option>
                                                    <option value="methods-159"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        НБД-Банк</option>
                                                    <option value="methods-160"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        НОКССБАНК</option>
                                                    <option value="methods-161"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Первый
                                                        Инвестиционный Банк</option>
                                                    <option value="methods-162"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Прио-Внешторгбанк</option>
                                                    <option value="methods-163"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        РУСНАРБАНК</option>
                                                    <option value="methods-164"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Русьуниверсалбанк</option>
                                                    <option value="methods-165"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Ситибанк</option>
                                                    <option value="methods-166"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Солид
                                                        Банк</option>
                                                    <option value="methods-167"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Тойота
                                                        Банк</option>
                                                    <option value="methods-168"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Точка
                                                        Банк</option>
                                                    <option value="methods-169"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        УРАЛПРОМБАНК</option>
                                                    <option value="methods-170"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Хайс</option>
                                                    <option value="methods-171"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Эс-Би-Ай
                                                        Банк</option>
                                                    <option value="methods-172"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ЮГ-Инвестбанк</option>
                                                    <option value="methods-173"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Яндекс
                                                        Банк</option>
                                                    <option value="methods-174"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        АИКБ
                                                        Енисейский объединенный
                                                        банк</option>
                                                    <option value="methods-175"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Синара</option>
                                                    <option value="methods-176"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Уралфинанс</option>
                                                    <option value="methods-177"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        ЦентроКредит</option>
                                                    <option value="methods-178"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ИС
                                                        Банк</option>
                                                    <option value="methods-179"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        КБ
                                                        Долинск</option>
                                                    <option value="methods-180"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Новый
                                                        век</option>
                                                    <option value="methods-181"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        УКБ
                                                        Белгородсоцбанк</option>
                                                    <option value="methods-182"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Автоградбанк</option>
                                                    <option value="methods-183"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        Екатеринбург</option>
                                                    <option value="methods-184"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        БАНК
                                                        СГБ</option>
                                                    <option value="methods-185"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Банк
                                                        СИАБ</option>
                                                    <option value="methods-186"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        Джей
                                                        энд Ти Банк (АО)</option>
                                                    <option value="methods-187"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        МБ
                                                        Банк</option>
                                                    <option value="methods-188"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        СМП
                                                        Банк</option>
                                                    <option value="methods-189"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/unknown_method.4e9cf2ca.svg' ?>">
                                                        ТОЧКА
                                                        (ФК ОТКРЫТИЕ)</option>
                                                    <option value="methods-190"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/kapital_uz.6a1cd8e4.png' ?>">
                                                        Капиталбанк</option>
                                                    <option value="methods-191"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/davr_uz.a0eb8417.png' ?>">
                                                        Давр
                                                        Банк</option>
                                                    <option value="methods-192"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/infin_uz.1f270936.png' ?>">
                                                        Инфин
                                                        Банк</option>
                                                    <option value="methods-193"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/hamkor_uz.f9199a67.png' ?>">
                                                        Hamkorbank</option>
                                                    <option value="methods-194"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/ipakyuli_uz.0876dffb.png' ?>">
                                                        Ipak
                                                        yuli Bank</option>
                                                    <option value="methods-195"
                                                        data-image="<?= get_template_directory_uri() . '/assets/img/methods/ipoteka_uz.27686605.png' ?>">
                                                        Ипотека
                                                        Б</option>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!---->
                                <div class="row mt-2"><label for="requisites"
                                        class="col-sm-4 col-form-label text-capitalize-first">реквизиты</label>
                                    <div class="col-sm-8">
                                        <div><input class="form-control" type="text" id="requisites2">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2"><label for="holderName"
                                        class="col-sm-4 col-form-label text-capitalize-first">имя владельца</label>
                                    <div class="col-sm-8">
                                        <div><input class="form-control" type="text" id="holderName2"></div>
                                    </div>
                                </div>
                                <div class="row mt-2"><label for="group"
                                        class="col-sm-4 col-form-label text-capitalize-first">Группа</label>
                                    <div class="col-sm-8">
                                        <select id="groups3" name="groups2">
                                            <option value="none" selected disabled hidden>
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-4"><label for="device"
                                        class="col-sm-4 col-form-label text-capitalize-first">устройство</label>
                                    <div class="col-sm-8">
                                        <select id="devices3" name="devices2">
                                            <option value="none" selected disabled hidden>
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-2"><label for="autoclose"
                                        class="col-sm-4 col-form-label text-capitalize-first pe-2">Автоматическое
                                        подтверждение сделок</label>
                                    <div class="col-sm-8 form-check form-switch d-flex align-items-center gap-2"><input
                                            id="autoclose2" class="form-check-input autoclose" style="cursor: pointer;"
                                            type="checkbox" role="switch"><span class="inactive-label">выключено</span>
                                    </div>
                                </div>
                                <div class="row mt-2"><label
                                        class="col-sm-12 col-form-label text-center text-capitalize-first">лимиты</label>
                                </div>
                                <div class="row"><label for="minPayInDealSum"
                                        class="col-sm-3 col-form-label text-capitalize-first pe-2 text-end">Мин. сумма
                                        сделки</label>
                                    <div class="col-sm-3">
                                        <div><input class="form-control" type="number" id="minPayInDealSum2"></div>
                                    </div><label for="maxPayInDealSum"
                                        class="col-sm-3 col-form-label text-capitalize-first pe-2 text-end">Макс. сумма
                                        сделки</label>
                                    <div class="col-sm-3">
                                        <div><input class="form-control" type="number" id="maxPayInDealSum2"></div>
                                    </div>
                                </div>
                                <div class="row mt-2"><label for="dayTradesSumLimit"
                                        class="col-sm-3 col-form-label text-capitalize-first pe-2 text-end">сумма
                                        (день)</label>
                                    <div class="col-sm-3">
                                        <div><input class="form-control" type="number" id="dayTradesSumLimit2"></div>
                                    </div><label for="monthTradesSumLimit"
                                        class="col-sm-3 col-form-label text-capitalize-first pe-2 text-end">сумма
                                        (месяц)</label>
                                    <div class="col-sm-3">
                                        <div><input class="form-control" type="number" id="monthTradesSumLimit2"></div>
                                    </div>
                                </div>
                                <div class="row mt-2"><label for="concurrentTradesCount"
                                        class="col-sm-3 col-form-label text-capitalize-first pe-2 text-end">Одновременных
                                        сделок</label>
                                    <div class="col-sm-3">
                                        <div><input class="form-control" type="number" id="concurrentTradesCount2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer"><button type="button"
                        class="btn btn-outline-secondary btn-sm text-capitalize-first btn-close_create2">отменить</button>
                    <div class="loader-wrapper"><button type="button" id="submit2"
                            class="btn btn-outline-primary btn-sm text-capitalize-first">сохранить</button>
                        <!---->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="visibility:hidden; z-index: 1;" class="modal-backdrop fade show"></div>
    <?php get_footer(); ?>