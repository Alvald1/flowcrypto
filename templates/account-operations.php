<?php
/*
Template Name: История операций
*/
get_header(); ?>
<!-- Шапка -->

<div class="pl-2 pr-2">
    <div class="loader-wrapper h-100">
        <div class="row m-4 mt-0">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-body mb-0">
                            <div class="row mt-2">
                                <div class="form-group mb-2 me-2 col-md-3 col-lg-3 col-xl-2">
                                    <div class="col p-0">
                                        <p>От даты: <input type="date" id="start" name="trip-start" />
                                        </p>
                                        <p>От времени: <input type="time" id="timepicker"></p>
                                    </div>
                                </div>
                                <div class="form-group mb-2 me-2 col-md-3 col-lg-3 col-xl-2">
                                    <div class="col p-0">
                                        <p>До даты: <input type="date" id="start" name="trip-start" />
                                        </p>
                                        <p>До времени: <input type="time" id="timepicker"></p>
                                    </div>
                                </div>
                                <div class="form-group mb-2 col-md-3 col-lg-3 col-xl-2 me-2">
                                    <div class="col p-0">
                                        <form>
                                            <select id="type_oper" name="type_oper">
                                                <option value="none" selected disabled hidden>Тип
                                                </option>
                                                <option value="type_oper-0">оплата
                                                    по счету - отмена</option>
                                                <option value="type_oper-1">оплата
                                                    по счету</option>
                                                <option value="type_oper-2">вывод
                                                </option>
                                                <option value="type_oper-3">внутренний
                                                    перевод</option>
                                                <option value="type_oper-3">депозит</option>
                                                <option value="type_oper-3">блокировка</option>
                                                <option value="type_oper-3">снятие
                                                    блокировки</option>
                                                <option value="type_oper-3">платеж
                                                    по сделке</option>
                                                <option value="type_oper-3">платеж
                                                    по сделке - отмена</option>
                                                <option value="type_oper-3">награда
                                                    за сделку</option>
                                                <option value="type_oper-3">награда
                                                    за сделку - отмена</option>
                                                <option value="type_oper-3">коммиссия
                                                    сервиса</option>
                                                <option value="type_oper-4">коммиссия
                                                    сервиса - отмена</option>
                                                <option value="type_oper-5">спор</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
            </div>
            <div class="col-sm-12">
                <div class="card card-body">
                    <div class="overflow-auto">
                        <table
                            class="table table-striped border-light align-middle text-left text-nowrap position-relative">
                            <thead>
                                <tr>
                                    <th class="text-capitalize-first">Дата (UTC)</th>
                                    <th class="text-capitalize-first">валюта</th>
                                    <th class="text-capitalize-first">сумма</th>
                                    <th class="text-capitalize-first">тип</th>
                                    <th class="text-capitalize-first">Баланс до</th>
                                    <th class="text-capitalize-first">Баланс после</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                        <!---->
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php get_footer(); ?>