<?php
/*
Template Name: Сделки
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
                            <div class="row">
                                <div class="form-group col-sm-8">
                                    <ul class="navbar-nav overflow-auto flex-row gap-4 pt-1">
                                        <li class="nav-item nav-item-spaced d-lg-block text-nowrap"><a href="#"
                                                class="nav-link tab text-capitalize-first">активные</a>
                                        </li>
                                        <li class="nav-item nav-item-spaced d-lg-block text-nowrap"><a href="#"
                                                class="nav-link tab text-capitalize-first">завершенные</a>
                                        </li>
                                        <li class="nav-item nav-item-spaced d-lg-block text-nowrap"><a href="#"
                                                class="nav-link tab text-capitalize-first">отмененные</a>
                                        </li>
                                        <li class="nav-item nav-item-spaced d-lg-block text-nowrap"><a href="#"
                                                class="nav-link tab text-capitalize-first position-relative">споры
                                                <!---->
                                            </a></li>
                                    </ul>
                                </div>
                                <div class="form-group col-sm-8 mt-1">
                                    <ul class="navbar-nav overflow-auto flex-row gap-4 pt-1">
                                        <li class="nav-item nav-item-spaced d-lg-block text-nowrap"><a href="#"
                                                class="nav-link tab text-capitalize-first position-relative">прием
                                                <!---->
                                            </a></li>
                                        <li class="nav-item nav-item-spaced d-lg-block text-nowrap"><a href="#"
                                                class="nav-link tab text-capitalize-first position-relative">выплата
                                                <!---->
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                            <!---->
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card card-body">
                            <div class="overflow-auto">
                                <table
                                    class="table table-striped border-light align-middle text-left text-nowrap position-relative">
                                    <thead>
                                        <tr>
                                            <th class="text-capitalize-first">ID/Дата (UTC)</th>
                                            <th class="text-capitalize-first">тип</th>
                                            <th class="text-capitalize-first">Статус</th>
                                            <th class="text-capitalize-first">курс</th>
                                            <th class="text-capitalize-first">сумма поступления</th>
                                            <th class="text-capitalize-first">сумма сделки</th>
                                            <th class="text-capitalize-first">реквизиты</th>
                                            <th class="text-capitalize-first">устройство</th>
                                            <!---->
                                            <!---->
                                            <!---->
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
        <!---->
    </div>
</div>

<?php get_footer(); ?>