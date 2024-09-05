<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href=<?= get_template_directory_uri() . '/assets/img/logo.png' ?>>
    <title>
        <?php
        if (is_404()) {
            echo 'Ошибка 404';
        } else {
            the_title();
        }
        ?>
    </title>
    <?php if (!is_user_logged_in()) {
        auth_redirect();
    }
    wp_head(); ?>
</head>


<body <?php body_class() ?>>
    <!-- Меню -->


    <header class="" id="header-main">
        <nav class="navbar navbar-main navbar-expand-lg shadow-sm navbar-light bg-nav p-0" id="navbar-main">
            <div class="collapse navbar-collapse navbar-collapse-overlay order-lg-3" style="top: 3rem; bottom: 1rem;"
                id="navbar-main-collapse">
                <div class="position-relative float-end" style="display: none;"></div>
                <ul class="navbar-nav align-items-lg-center d-lg-flex ms-3 ms-lg-auto me-3">
                    <li class="nav-item mt-2 mb-2">
                        <div class="d-flex flex-row align-items-center gap-2"><label for="traderStatus"
                                class="badge bg-danger">прием</label>
                            <div class="form-switch"><input id="traderStatus" class="form-check-input"
                                    style="cursor: pointer;" type="checkbox" role="switch">
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mt-2 mb-2">
                        <div class="d-flex flex-row align-items-center gap-2"><label for="traderPayOutStatus"
                                class="badge bg-danger">выплата</label>
                            <div class="form-switch"><input id="traderPayOutStatus" class="form-check-input"
                                    style="cursor: pointer;" type="checkbox" role="switch"></div>
                        </div>
                    </li>
                    <!---->
                    <li class="nav-item"><a id="exit_button" class="nav-link text-nowrap" href="#"></a></li>
                </ul>
            </div>
            </div>
        </nav>
    </header>
    <div class="col-md-12 ">
        <div class="row" style="position: relative;">
            <div class="col-sm-2">
                <nav class="navbar navbar-main navbar-light bg-nav-2" id="navbar-main">
                    <div class="d-flex flex-column">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item">
                                <a class="navbar-brand" href="#">
                                    <img src=<?= get_template_directory_uri() . "/assets/img/icons/logo-name.png" ?>
                                        alt="" height="80px">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/" class="nav-link text-capitalize-first">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a href="/statistic" class="nav-link text-capitalize-first">Статистика</a>
                            </li>
                            <li class="nav-item">
                                <a href="/account-operations" class="nav-link text-capitalize-first">История
                                    операций</a>
                            </li>
                            <li class="nav-item">
                                <a href="/deals" class="nav-link text-capitalize-first">Сделки</a>
                            </li>
                            <li class="nav-item">
                                <a href="/requisites" class="nav-link text-capitalize-first">Реквизиты</a>
                            </li>
                            <li class="nav-item">
                                <a href="/settings" class="nav-link text-capitalize-first">Настройки</a>
                            </li>
                        </ul>

                    </div>
                </nav>

            </div>
            <div class="col-sm-10" style="position: absolute; right: 0;">