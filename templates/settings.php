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

        </div>
    </div>
</div>


<?php get_footer(); ?>