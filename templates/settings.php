<?php
/*
Template Name: Настройки
*/
get_header(); ?>
<!-- Шапка -->



<div class="pl-2 pr-2">
    <div class="m-4">
        <div class="row">
            <div class="col-sm-12 col-md-6 offset-md-3">
                <h5 class="ms-3 me-3 mb-0 text-center">Изменение пароля</h5>
            </div>
            <div class="col-sm-12 col-md-6 offset-md-3">
                <div class="card">
                    <div class="loader-wrapper">
                        <div class="card-body">
                            <div class="mb-3 row"><label for="inputPassword"
                                    class="col-sm-4 col-form-label text-capitalize-first">новый
                                    пароль:</label>
                                <div class="col-sm-4"><input type="password" class="form-control" id="inputPassword">
                                </div>
                            </div>
                            <div class="row"><label for="inputPasswordConf"
                                    class="col-sm-4 col-form-label text-capitalize-first">подтвердите
                                    пароль:</label>
                                <div class="col-sm-4"><input type="password" class="form-control"
                                        id="inputPasswordConf"></div>
                            </div>
                        </div>
                        <div class="card-footer p-3">
                            <div class="form-group text-end mb-0"><button type="button"
                                    class="btn btn-outline-primary text-capitalize-first">обновить
                                    пароль</button></div>
                        </div>
                        <!---->
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 offset-md-3">
                <h5 class="ms-3 me-3 mb-0 text-center">Подключение автоматики</h5>
                <div class="col-sm-12 col-md-6 offset-md-3">
                    <div class="card">
                        <div class="loader-wrapper">
                            <div class="card-body">

                                <div class="row"><label for="connect"
                                        class="col-sm-9 col-form-label text-capitalize-first">Получить ключ:</label>
                                    <div class="col-sm-3"><button id="connect" type="button"
                                            class="btn btn-sm btn-outline-dark text-nowrap text-capitalize"><i
                                                class="fa-solid fa-download"></i> ключ </button></div>
                                </div>
                            </div>

                            <!---->
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 offset-md-3">
                    <div class="card">
                        <div class="loader-wrapper">
                            <div class="card-body">
                                <div class="row"><label id="automatic"
                                        class="col-form-label text-capitalize-first"></label>
                                </div>
                            </div>
                            <!---->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="customAlert" class="custom-alert-overlay">
                        <div class="custom-alert-box">
                            <p id="alertMessage"></p>
                            <div class="alert-details">
                                <label for="uuidField">Key:</label>
                                <input type="text" id="uuidField" readonly>
                            </div>
                            <button id="closeAlert" class="btn btn-primary">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>