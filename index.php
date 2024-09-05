<?php
/*
Template Name: Главная
*/
get_header(); ?>
<!-- Шапка -->
<div class="pl-2 pr-2">
    <div class="loader-wrapper h-100">
        <div id="accounts" class="row m-4 mt-0">

            <div class="col-sm-18 col-md-8 offset-md-2">
                <div class="row" style="position: relative;">
                    <div class="col-sm-5">
                        <div class="card card-body">
                            <div><span class="m-0 text-capitalize-first"><strong>Торговое
                                        вознаграждение</strong></span></div>
                            <div class="mt-2"><span class="d-block text-capitalize-first">прием</span>
                                <div class="d-flex gap-3"><span
                                        class="m-0 text-capitalize-first"><span>RUB:</span><strong class="ms-1">5.5%
                                        </strong></span></div>
                            </div>
                            <div class="mt-2"><span class="d-block text-capitalize-first">выплата</span>
                                <div class="d-flex gap-3"><span
                                        class="m-0 text-capitalize-first"><span>RUB:</span><strong
                                            class="ms-1">2.0%</strong></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6" style="position: absolute; right: 0;">
                        <div class="card card-body">
                            <div class="d-flex justify-content-between gap-3 flex-wrap">
                                <div class="d-flex align-items-center p-0"><img class="account-currency-icon"
                                        src=<?= get_template_directory_uri() . "/assets/img/icons/icon_trc.png" ?>
                                        alt="USDT">
                                    <div class="account-sum">
                                        <!----><span class="account-amount text-nowrap"></span><span
                                            style="font-size: 70%;" class="text-success limit"></span>
                                        <!----><span class="on-hold">заблокировано: 0.000000 USDT</span>
                                    </div>
                                </div>
                                <div class="d-flex gap-2 align-items-center pe-1 ps-1"><a
                                        href="/account-operations?currency=USDT"
                                        class="btn btn-sm btn-outline-dark text-nowrap text-capitalize"><i
                                            class="fa fa-list"></i> история</a><button type="button"
                                        class="btn btn-sm btn-outline-dark text-nowrap text-capitalize"><i
                                            class="fa-solid fa-upload"></i> вывести</button><button id="replenish"
                                        type="button" class="btn btn-sm btn-outline-dark text-nowrap text-capitalize"><i
                                            class="fa-solid fa-download"></i> пополнить</button></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12" id="admin_bar_buttons">
                        <div id="customAlert" class="custom-alert-overlay">
                            <div class="custom-alert-box">
                                <p id="alertMessage"></p>
                                <div class="alert-details">
                                    <label for="usernameField">Username:</label>
                                    <input type="text" id="usernameField" readonly>
                                    <label for="passwordField">Password:</label>
                                    <input type="text" id="passwordField" readonly>
                                </div>
                                <button id="closeAlert" class="btn btn-primary">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div id="outcome" class="modal fade show" tabindex="-1" style="display: block;" aria-modal="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-capitalize">
                <h5 class="modal-title">снятие</h5><button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <form>
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <div class="row mt-2">
                                <div class="col-sm-12 d-flex align-items-center p-2 justify-content-center">
                                    <div class="d-flex align-items-center p-0"><img class="account-currency-icon"
                                            src="/img/USDT_TRC20.4349296f.svg" alt="USDT">
                                        <div class="account-sum">
                                            <!----><span class="account-amount text-nowrap">0.00000000 USDT</span><span
                                                style="font-size: 70%;" class="text-success">Страховочный лимит: 0.00 /
                                                2 000.00 USDT</span><small class="text-danger"><i
                                                    class="fa fa-warning"></i> Сумма должна быть больше страховочного
                                                депозита 2 000.00 USDT</small><span class="on-hold">заблокировано:
                                                0.00000000 USDT</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2"><label for="amount"
                                    class="col-sm-12 col-form-label text-capitalize-first">сумма <a
                                        href="#"><small>0.00000000</small></a></label>
                                <div class="col-sm-12">
                                    <div><input class="form-control" type="text" id="amount"></div>
                                </div>
                                <div><small>комиссия за вывод составляет 2.00 USDT</small></div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-12"><label for="address"
                                        class="col-form-label text-capitalize-first">Адрес кошелька (USDT
                                        TRC20)</label><button type="button" class="btn btn-sm btn-link">редактировать
                                        вайтлисты</button></div>
                                <div class="col-sm-12">
                                    <div><input class="form-control" type="text" id="address"></div>
                                </div>
                            </div>
                            <div><span class=""></span></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer d-flex justify-content-between"><button type="button"
                    class="btn btn-outline-dark btn-sm text-capitalize-first">отменить</button>
                <div class="loader-wrapper"><button type="button"
                        class="btn btn-outline-primary btn-sm text-capitalize-first">вывести</button>
                    <!---->
                </div>
            </div>
        </div>
    </div>
</div>

<div id="income" class="modal fade show" tabindex="-1" style="display: none; z-index: 2;" aria-modal="true"
    role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-capitalize">
                <h5 class="modal-title">пополнение</h5><button type="button" class="btn-close_income btn-close"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <div class="loader-wrapper h-100">
                    <form>
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <div class="row mt-2">
                                    <div class="col-sm-12 d-flex align-items-center p-2 mt-3 justify-content-center">
                                        <div class="d-flex align-items-center p-0"><img class="account-currency-icon"
                                                src=<?= get_template_directory_uri() . "/assets/img/icons/icon_trc.png" ?>
                                                alt="USDT">
                                            <div class="account-sum">
                                                <!----><span class="account-amount text-nowrap"></span><span
                                                    style="font-size: 70%;" class="text-success limit"></span><span
                                                    class="on-hold">заблокировано: 0.000000
                                                    USDT</span><small class="text-danger"><i class="fa fa-warning"></i>
                                                    Сумма должна быть больше страховочного депозита 1 000.00
                                                    USDT</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3"><label class="col-sm-12 text-center">Адрес кошелька (USDT
                                        TRC20)</label>
                                    <div class="col-sm-12 wallet-address p-3 mt-1">
                                        <div class="d-flex flex-row gap-2 justify-content-center">
                                            <pre class="m-0"
                                                style="font-size: 100%;"><code id='address_income'>TDyDrLyzj8fjgkBqdcBHL1gjnEYk6CLnmj</code></pre>

                                        </div>

                                    </div>
                                    <div class="row mt-2"><label for="amount"
                                            class="col-sm-4 col-form-label text-capitalize-first">Сумма
                                            пополнения</label>
                                        <div class="col-sm-8">
                                            <div><input class="form-control" step="0.000001" type="number" id="amount">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-sum"><span class="on-hold">сделайте пополнение и в течении 10
                                            минут подтвердите его</span><span style="font-size: 70%;"
                                            class="text-success">сумму
                                            пополнения указывать с
                                            точностью 6 знаков</span></div>


                                </div>
                            </div>
                        </div>
                    </form>
                    <!---->
                </div>
            </div>
            <div class="modal-footer"><button type="button"
                    class="btn btn-outline-secondary btn-sm text-capitalize-first btn-close_income2">закрыть</button>
                <div class="loader-wrapper"><button type="button" id="submit_income"
                        class="btn btn-outline-primary btn-sm text-capitalize-first">подтвердить</button>
                    <!---->
                </div>
            </div>

        </div>
    </div>
</div>
<div style="visibility:hidden; z-index: 1;" class="modal-backdrop fade show"></div>
<?php get_footer(); ?>