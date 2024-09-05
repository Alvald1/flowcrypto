<?php

add_action('login_enqueue_scripts', 'my_login_stylesheet');
function my_login_stylesheet()
{
    wp_enqueue_style('custom-login', get_template_directory_uri() . '/assets/css/login.css');
}


add_action('init', 'catch_post_request');
function catch_post_request()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Получаем данные POST-запроса

        $key = $_GET['key'];
        $postData = file_get_contents('php://input');
        $users = get_users(
            array(
                'fields' => array('ID', 'uuid') // Извлекаем только 'user_login'
            )
        );
        $found_id = null;
        foreach ($users as $user) {
            $uuid = get_user_meta($user->ID, 'uuid', true);
            if ($uuid == $key) {
                $found_id = $user->ID;
                break; // Завершаем цикл после нахождения первого совпадения
            }
        }

        if (!empty($key) && $found_id != null) {
            update_user_meta($found_id, 'status_auto', 'OK');
            // Логирование данных
            file_put_contents(
                get_stylesheet_directory() . '/post_data_log.txt',
                date('Y-m-d H:i:s') . " - " . urldecode($postData) . "; key = " . $key . "; found_id=" . $found_id . "; uuid=" . $uuid . "\n",
                FILE_APPEND
            );
        }

        // Вы можете выполнить дополнительные действия, такие как отправка уведомлений, обработка данных и т.д.
    }
}


add_action('wp_enqueue_scripts', 'add_js_and_css');
function add_js_and_css()
{

    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/app.css');
    wp_enqueue_script('jquery');


    wp_enqueue_style('select2-css', get_template_directory_uri() . '/assets/css/select2.min.css');
    wp_enqueue_script('navbar', get_template_directory_uri() . '/assets/js/navbar.js', array('jquery'), null, true);
    wp_enqueue_script('select2-js', get_template_directory_uri() . '/assets/js/select2.min.js', array('jquery'), null, true);
    wp_enqueue_script('custom-select2-js', get_template_directory_uri() . '/assets/js/custom-select2.js', array('select2-js'), null, true);

    if (is_page_template('index.php')) {
        wp_enqueue_script('index', get_template_directory_uri() . '/assets/js/index.js', array('jquery'), null, true);

    }

    if (is_page_template('index.php') && current_user_can('administrator')) {
        wp_enqueue_script('admin', get_template_directory_uri() . '/assets/js/admin.js', array('jquery'), null, true);
        $nonce_get_users_id = wp_create_nonce('nonce_get_users_id');
        $nonce_create_user_my = wp_create_nonce('nonce_create_user_my');
        $nonce_get_users_data = wp_create_nonce('nonce_get_users_data');
        wp_localize_script(
            'admin',
            'nonce',
            array(
                'nonce_get_users_id' => $nonce_get_users_id,
                'nonce_create_user_my' => $nonce_create_user_my,
                'nonce_get_users_data' => $nonce_get_users_data

            )
        );
    }

    if (is_page_template('templates/statistic.php')) {
        wp_enqueue_script('get_devices', get_template_directory_uri() . '/assets/js/get_devices.js', array('jquery'), null, true);

    }
    if (is_page_template('templates/settings.php')) {
        wp_enqueue_script('settings', get_template_directory_uri() . '/assets/js/settings.js', array('jquery'), null, true);

    }
    if (is_page_template('templates/requisites.php')) {
        wp_enqueue_script('requisites', get_template_directory_uri() . '/assets/js/requisites.js', array('jquery'), null, true);
        wp_enqueue_script('generate_devices', get_template_directory_uri() . '/assets/js/generate_devices.js', array('jquery'), null, true);
        wp_localize_script('generate_devices', 'myUserData', array('url' => get_template_directory_uri()));
        wp_enqueue_script('generate_groups', get_template_directory_uri() . '/assets/js/generate_groups.js', array('jquery'), null, true);
        wp_localize_script('generate_groups', 'myUserData', array('url' => get_template_directory_uri()));
        wp_enqueue_script('generate_requisites', get_template_directory_uri() . '/assets/js/generate_requisites.js', array('jquery'), null, true);
        wp_localize_script('generate_requisites', 'myUserData', array('url' => get_template_directory_uri()));
    }

    wp_enqueue_script('logout', get_template_directory_uri() . '/assets/js/logout.js', null, null, true);

    // Создаем nonce и передаем его в JavaScript



}


add_action('wp_enqueue_scripts', 'myajax_data', 99);
function myajax_data()
{
    wp_enqueue_script('active-page', get_template_directory_uri() . '/assets/js/active-page.js', array('jquery'), null, true);
    $nonce_change_password = wp_create_nonce('nonce_change_password');
    $nonce_refresh_user_meta_devices = wp_create_nonce('nonce_refresh_user_meta_devices');
    $nonce_update_device = wp_create_nonce('nonce_update_device');
    $nonce_delete_device = wp_create_nonce('nonce_delete_device');
    $nonce_update_devices = wp_create_nonce('nonce_update_devices');
    $nonce_refresh_user_meta_groups = wp_create_nonce('nonce_refresh_user_meta_groups');
    $nonce_update_group = wp_create_nonce('nonce_update_group');
    $nonce_delete_group = wp_create_nonce('nonce_delete_group');
    $nonce_update_groups = wp_create_nonce('nonce_update_groups');
    $nonce_refresh_user_meta_requisites = wp_create_nonce('nonce_refresh_user_meta_requisites');
    $nonce_delete_requisites = wp_create_nonce('nonce_delete_requisites');
    $nonce_submit_requisites = wp_create_nonce('nonce_submit_requisites');
    $nonce_edit_requisites = wp_create_nonce('nonce_edit_requisites');
    $nonce_get_started_info = wp_create_nonce('nonce_get_started_info');
    $nonce_aprove_income = wp_create_nonce('nonce_aprove_income');
    $nonce_get_nickname = wp_create_nonce('nonce_get_nickname');
    $nonce_custom_logout = wp_create_nonce('nonce_custom_logout');
    $nonce_update_balance = wp_create_nonce('nonce_update_balance');
    $nonce_generate_uuid = wp_create_nonce('nonce_generate_uuid');
    $nonce_check_status = wp_create_nonce('nonce_check_status');
    $nonce_change_status = wp_create_nonce('nonce_change_status');


    wp_localize_script(
        'active-page',
        'myajax',
        array(
            'url' => admin_url('admin-ajax.php'),
            'nonce_change_password' => $nonce_change_password,
            'nonce_refresh_user_meta_devices' => $nonce_refresh_user_meta_devices,
            'nonce_update_device' => $nonce_update_device,
            'nonce_delete_device' => $nonce_delete_device,
            'nonce_update_devices' => $nonce_update_devices,
            'nonce_update_group' => $nonce_update_group,
            'nonce_delete_group' => $nonce_delete_group,
            'nonce_update_groups' => $nonce_update_groups,
            'nonce_refresh_user_meta_requisites' => $nonce_refresh_user_meta_requisites,
            'nonce_refresh_user_meta_groups' => $nonce_refresh_user_meta_groups,
            'nonce_delete_requisites' => $nonce_delete_requisites,
            'nonce_submit_requisites' => $nonce_submit_requisites,
            'nonce_edit_requisites' => $nonce_edit_requisites,
            'nonce_get_started_info' => $nonce_get_started_info,
            'nonce_aprove_income' => $nonce_aprove_income,
            'nonce_get_nickname' => $nonce_get_nickname,
            'nonce_custom_logout' => $nonce_custom_logout,
            'nonce_update_balance' => $nonce_update_balance,
            'nonce_generate_uuid' => $nonce_generate_uuid,
            'nonce_check_status' => $nonce_check_status,
            'nonce_change_status' => $nonce_change_status,

        )
    );
}

add_action('after_setup_theme', 'add_menu');
function add_menu()
{
    register_nav_menu('top', 'Главное меню сайта');
}


add_action('admin_init', 'restrict_admin_area');
function restrict_admin_area()
{
    // Проверяем, если пользователь пытается получить доступ к wp-admin, но не к admin-ajax.php
    if (is_admin() && !current_user_can('administrator') && strpos($_SERVER['REQUEST_URI'], 'admin-ajax.php') === false) {
        // Перенаправляем пользователя на главную страницу сайта
        wp_redirect(home_url());
        exit;
    }
}

add_action('after_setup_theme', 'hide_admin_bar_for_non_admins');
function hide_admin_bar_for_non_admins()
{
    if (!current_user_can('administrator')) {
        show_admin_bar(false);
    }
}


add_action('wp_ajax_get_nickname', 'get_nickname');
add_action('wp_ajax_nopriv_get_nickname', 'get_nickname');
function get_nickname()
{
    if (!check_ajax_referer('nonce_get_nickname', 'security', false)) {
        wp_send_json_error('Неверный nonce.');
    }
    $user_id = get_current_user_id();
    $user_meta_devices = get_user_meta($user_id, 'nickname', true);
    wp_send_json_success($user_meta_devices);
}


add_action('wp_ajax_custom_logout', 'custom_logout');
add_action('wp_ajax_nopriv_custom_logout', 'custom_logout');
function custom_logout()
{
    if (!check_ajax_referer('nonce_custom_logout', 'security', false)) {
        wp_send_json_error('Неверный nonce.');
    }

    // Выходим из профиля
    wp_logout();

    // Проверяем успешность выхода
    if (!is_user_logged_in()) {
        $response = array(
            'success' => true,
            'redirect_url' => home_url() // URL для перенаправления после успешного выхода
        );
        wp_send_json_success($response);
    } else {
        wp_send_json_error('Ошибка при выходе.');
    }
}



add_action('wp_ajax_create_user_my', 'create_user_my');
add_action('wp_ajax_nopriv_create_user_my', 'create_user_my');
function create_user_my()
{
    if (!check_ajax_referer('nonce_create_user_my', 'security', false)) {
        wp_send_json_error('Неверный nonce.');
    }
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
        $id = wp_create_user($_POST['username'], $_POST['password'], $_POST['email']);
        update_user_meta($id, 'password', $_POST['password']);
        wp_send_json_success('Пользователь успешно создан.');
    } else {
        wp_send_json_error('No data received');
    }

}


add_action('wp_ajax_get_users_id', 'get_users_id');
add_action('wp_ajax_nopriv_get_users_id', 'get_users_id');
function get_users_id()
{
    if (!check_ajax_referer('nonce_get_users_id', 'security', false)) {
        wp_send_json_error('Неверный nonce.');
    }

    wp_send_json_success(
        get_users(
            array(
                'fields' => 'ID'
            )
        )
    );


}


add_action('wp_ajax_get_users_data', 'get_users_data');
add_action('wp_ajax_nopriv_get_users_data', 'get_users_data');
function get_users_data()
{
    // Проверка nonce
    if (!check_ajax_referer('nonce_get_users_data', 'security', false)) {
        wp_die('Неверный nonce.');
    }

    // Получение пользователей
    $users = get_users(
        array(
            'fields' => array('user_login', 'ID') // Извлекаем только 'user_login'
        )
    );

    // Получение директории для загрузки файлов
    $upload_dir = wp_upload_dir();
    $upload_path = $upload_dir['path']; // Путь на сервере
    $upload_url = $upload_dir['url']; // URL для доступа к файлу

    // Имя файла
    $filename = $upload_path . '/users_list.csv';

    // Открываем файл для записи
    $output = fopen($filename, 'w');

    // Заполняем заголовки
    fputcsv($output, array('Login', 'Password', 'Balance'));
    // Заполняем данными
    foreach ($users as $user) {
        fputcsv($output, array($user->user_login, get_user_meta($user->ID, 'password', true), get_user_meta($user->ID, 'balance', true)));
    }

    // Закрываем файл
    fclose($output);

    // Возвращаем URL для скачивания
    wp_send_json_success($upload_url . '/users_list.csv');
    exit();
}



add_action('wp_ajax_update_devices', 'update_devices');
add_action('wp_ajax_nopriv_update_devices', 'update_devices');
function update_devices()
{
    if (!check_ajax_referer('nonce_update_devices', 'security', false)) {
        wp_send_json_error('Неверный nonce.');
    }
    if (isset($_POST['data'])) {
        $data = $_POST['data'];
        $user_id = get_current_user_id();
        $user_meta_devices = get_user_meta($user_id, 'devices', true);
        if (is_array($user_meta_devices) == false) {
            $user_meta_devices = [];
        }
        $user_meta_devices[] = $data;
        update_user_meta($user_id, 'devices', $user_meta_devices);
        wp_send_json_success($user_meta_devices);
    } else {
        wp_send_json_error('No data received');
    }
}


add_action('wp_ajax_update_device', 'update_device');
add_action('wp_ajax_nopriv_update_device', 'update_device');
function update_device()
{
    if (!check_ajax_referer('nonce_update_device', 'security', false)) {
        wp_send_json_error('Неверный nonce.');
    }
    if (isset($_POST['data'])) {
        $data = $_POST['data'];
        $user_id = get_current_user_id();
        $user_meta_devices = get_user_meta($user_id, 'devices', true);
        foreach ($user_meta_devices as &$object) {
            if ($object['id'] === $data['id']) {
                $object['name'] = $data['name'];
            }
        }
        update_user_meta($user_id, 'devices', $user_meta_devices);
        wp_send_json_success($user_meta_devices);
    } else {
        wp_send_json_error('No data received');
    }
}

add_action('wp_ajax_delete_device', 'delete_device');
add_action('wp_ajax_nopriv_delete_device', 'delete_device');
function delete_device()
{
    if (!check_ajax_referer('nonce_delete_device', 'security', false)) {
        wp_send_json_error('Неверный nonce.');
    }
    if (isset($_POST['data'])) {
        $data = $_POST['data'];
        $user_id = get_current_user_id();
        $user_meta_devices = get_user_meta($user_id, 'devices', true);
        $user_meta_devices = array_filter($user_meta_devices, function ($item) use ($data) {
            return $item['id'] !== $data;
        });
        update_user_meta($user_id, 'devices', $user_meta_devices);
        wp_send_json_success($user_meta_devices);
    } else {
        wp_send_json_error('No data received');
    }
}

add_action('wp_ajax_refresh_user_meta_devices', 'refresh_user_meta_devices');
add_action('wp_ajax_nopriv_refresh_user_meta_devices', 'refresh_user_meta_devices');
function refresh_user_meta_devices()
{
    if (!check_ajax_referer('nonce_refresh_user_meta_devices', 'security', false)) {
        wp_send_json_error('Неверный nonce.');
    }
    $user_id = get_current_user_id();
    $user_meta_devices = get_user_meta($user_id, 'devices', true);
    wp_send_json_success($user_meta_devices);
}


add_action('wp_ajax_update_groups', 'update_groups');
add_action('wp_ajax_nopriv_update_groups', 'update_groups');
function update_groups()
{
    if (!check_ajax_referer('nonce_update_groups', 'security', false)) {
        wp_send_json_error('Неверный nonce.');
    }
    if (isset($_POST['data'])) {
        $data = $_POST['data'];
        $user_id = get_current_user_id();
        $user_meta_groups = get_user_meta($user_id, 'groups', true);
        if (is_array($user_meta_groups) == false) {
            $user_meta_groups = [];
        }
        $user_meta_groups[] = $data;
        update_user_meta($user_id, 'groups', $user_meta_groups);
        wp_send_json_success($user_meta_groups);
    } else {
        wp_send_json_error('No data received');
    }
}


add_action('wp_ajax_update_group', 'update_group');
add_action('wp_ajax_nopriv_update_group', 'update_group');
function update_group()
{
    if (!check_ajax_referer('nonce_update_group', 'security', false)) {
        wp_send_json_error('Неверный nonce.');
    }
    if (isset($_POST['data'])) {
        $data = $_POST['data'];
        $user_id = get_current_user_id();
        $user_meta_groups = get_user_meta($user_id, 'groups', true);
        foreach ($user_meta_groups as &$object) {
            if ($object['id'] === $data['id']) {
                $object['name'] = $data['name'];
            }
        }
        update_user_meta($user_id, 'groups', $user_meta_groups);
        wp_send_json_success($user_meta_groups);
    } else {
        wp_send_json_error('No data received');
    }
}

add_action('wp_ajax_delete_group', 'delete_group');
add_action('wp_ajax_nopriv_delete_group', 'delete_group');
function delete_group()
{
    if (!check_ajax_referer('nonce_delete_group', 'security', false)) {
        wp_send_json_error('Неверный nonce.');
    }
    if (isset($_POST['data'])) {
        $data = $_POST['data'];
        $user_id = get_current_user_id();
        $user_meta_groups = get_user_meta($user_id, 'groups', true);
        $user_meta_groups = array_filter($user_meta_groups, function ($item) use ($data) {
            return $item['id'] !== $data;
        });
        update_user_meta($user_id, 'groups', $user_meta_groups);
        wp_send_json_success($user_meta_groups);
    } else {
        wp_send_json_error('No data received');
    }
}

add_action('wp_ajax_refresh_user_meta_groups', 'refresh_user_meta_groups');
add_action('wp_ajax_nopriv_refresh_user_meta_groups', 'refresh_user_meta_groups');
function refresh_user_meta_groups()
{
    if (!check_ajax_referer('nonce_refresh_user_meta_groups', 'security', false)) {
        wp_send_json_error('Неверный nonce.');
    }
    $user_id = get_current_user_id();
    $user_meta_groups = get_user_meta($user_id, 'groups', true);
    wp_send_json_success($user_meta_groups);
}


add_action('wp_ajax_submit_requisites', 'submit_requisites');
add_action('wp_ajax_nopriv_submit_requisites', 'submit_requisites');
function submit_requisites()
{
    if (!check_ajax_referer('nonce_submit_requisites', 'security', false)) {
        wp_send_json_error('Неверный nonce.');
    }
    if (isset($_POST['data'])) {
        $data = $_POST['data'];
        $user_id = get_current_user_id();
        $user_meta = get_user_meta($user_id, 'requisites', true);
        if (is_array($user_meta) == false) {
            $user_meta = [];
        }
        $user_meta[] = $data;
        update_user_meta($user_id, 'requisites', $user_meta);
        wp_send_json_success($user_meta);
    } else {
        wp_send_json_error('No data received');
    }
}

add_action('wp_ajax_edit_requisites', 'edit_requisites');
add_action('wp_ajax_nopriv_edit_requisites', 'edit_requisites');
function edit_requisites()
{
    if (!check_ajax_referer('nonce_edit_requisites', 'security', false)) {
        wp_send_json_error('Неверный nonce.');
    }
    if (isset($_POST['data'])) {
        $data = $_POST['data'];
        $user_id = get_current_user_id();
        $user_meta = get_user_meta($user_id, 'requisites', true);
        $user_meta[$_POST['id']] = $data;
        update_user_meta($user_id, 'requisites', $user_meta);
        wp_send_json_success($user_meta);
    } else {
        wp_send_json_error('No data received');
    }
}


add_action('wp_ajax_delete_requisites', 'delete_requisites');
add_action('wp_ajax_nopriv_delete_requisites', 'delete_requisites');
function delete_requisites()
{
    if (!check_ajax_referer('nonce_delete_requisites', 'security', false)) {
        wp_send_json_error('Неверный nonce.');
    }
    if (isset($_POST['data'])) {
        $data = $_POST['data'];
        $user_id = get_current_user_id();
        $user_meta = get_user_meta($user_id, 'requisites', true);
        unset($user_meta[$data]);
        update_user_meta($user_id, 'requisites', $user_meta);
        wp_send_json_success($user_meta);
    } else {
        wp_send_json_error('No data received');
    }
}


add_action('wp_ajax_refresh_user_meta_requisites', 'refresh_user_meta_requisites');
add_action('wp_ajax_nopriv_refresh_user_meta_requisites', 'refresh_user_meta_requisites');
function refresh_user_meta_requisites()
{
    if (!check_ajax_referer('nonce_refresh_user_meta_requisites', 'security', false)) {
        wp_send_json_error('Неверный nonce.');
    }
    $user_id = get_current_user_id();
    $user_meta_requisites = get_user_meta($user_id, 'requisites', true);
    wp_send_json_success($user_meta_requisites);
}



add_action('wp_ajax_get_started_info', 'get_started_info');
add_action('wp_ajax_nopriv_get_started_info', 'get_started_info');
function get_started_info()
{
    if (!check_ajax_referer('nonce_get_started_info', 'security', false)) {
        wp_send_json_error('Неверный nonce.');
    }
    $user_id = get_current_user_id();
    $user_meta_limit = get_user_meta($user_id, 'limit', true);
    $user_meta_balance = get_user_meta($user_id, 'balance', true);
    wp_send_json_success(array('limit' => $user_meta_limit, 'balance' => $user_meta_balance));
}



add_action('wp_ajax_change_password', 'change_password');
add_action('wp_ajax_nopriv_change_password', 'change_password');
function change_password()
{
    if (!check_ajax_referer('nonce_change_password', 'security', false)) {
        wp_send_json_error('Неверный nonce.');
    }
    if (isset($_POST['data'])) {
        $data = $_POST['data'];
        $user_id = get_current_user_id();
        update_user_meta($user_id, 'password', $data);
        wp_set_password($data, $user_id);
        wp_send_json_success('');
    } else {
        wp_send_json_error('No data received');
    }
}



add_action('wp_ajax_aprove_income', 'aprove_income');
add_action('wp_ajax_nopriv_aprove_income', 'aprove_income');
function aprove_income()
{
    if (!check_ajax_referer('nonce_aprove_income', 'security', false)) {
        wp_send_json_error('Неверный nonce.');
    }
    $curl = curl_init();
    $API = '322babbd-8b54-43db-93e2-6aa364c6a835';
    $trc20id = 'TR7NHqjeKQxGTCi8q8ZY4pL8otSzgjLj6t';
    $cur_time = time();
    $interval = $_POST['interval'];
    $start_time = $cur_time - $interval; // Start time
    $address = $_POST['address'];
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://apilist.tronscanapi.com/api/transfer/trc20?address={$address}&trc20Id={$trc20id}&start=0&limit=5&direction=2&reverse=true&db_version=1&start_timestamp={$start_time}&end_timestamp={$cur_time}",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            "TRON-PRO-API-KEY: {$API}"
        ],
    ]);

    $out = curl_exec($curl);

    if ($out === false) {
        $error_msg = curl_error($curl);
        curl_close($curl);
        wp_send_json_error($error_msg);  // Send error response if cURL fails
    } else {
        curl_close($curl);
        wp_send_json_success($out);  // Decode and send the successful response
    }

}


add_action('wp_ajax_update_balance', 'update_balance');
add_action('wp_ajax_nopriv_update_balance', 'update_balance');
function update_balance()
{
    if (!check_ajax_referer('nonce_update_balance', 'security', false)) {
        wp_send_json_error('Неверный nonce.');
    }
    if (isset($_POST['income'])) {
        $user_id = get_current_user_id();
        $income = floatval($_POST['income']);
        $t = get_user_meta($user_id, 'limit', true);
        $cur_limit = floatval($t == '' ? '0' : $t);
        $t = get_user_meta($user_id, 'balance', true);
        $prev_balance = floatval($t == '' ? '0' : $t);
        $remains = ($cur_limit + $income + $prev_balance) - 2000;
        if ($remains >= 0) {
            update_user_meta($user_id, 'limit', 2000);
            update_user_meta($user_id, 'balance', $remains);
        } else {
            update_user_meta($user_id, 'limit', 2000 + $remains);
            update_user_meta($user_id, 'balance', 0);
        }
        wp_send_json_success('');
    } else {
        wp_send_json_error('No data received');
    }
}

add_action('wp_ajax_generate_uuid', 'generate_uuid');
add_action('wp_ajax_nopriv_generate_uuid', 'generate_uuid');
function generate_uuid()
{
    if (!check_ajax_referer('nonce_generate_uuid', 'security', false)) {
        wp_send_json_error('Неверный nonce.');
    }
    $uuid = uniqid('', true);
    $user_id = get_current_user_id();
    update_user_meta($user_id, 'uuid', $uuid);
    wp_send_json_success(array('uuid' => $uuid));
}

add_action('wp_ajax_check_status', 'check_status');
add_action('wp_ajax_nopriv_check_status', 'check_status');
function check_status()
{
    if (!check_ajax_referer('nonce_check_status', 'security', false)) {
        wp_send_json_error('Неверный nonce.');
    }
    $user_id = get_current_user_id();
    $status_key = get_user_meta($user_id, 'status_auto', true);
    wp_send_json_success($status_key);
}

add_action('wp_ajax_change_status', 'change_status');
add_action('wp_ajax_nopriv_change_status', 'change_status');
function change_status()
{
    if (!check_ajax_referer('nonce_change_status', 'security', false)) {
        wp_send_json_error('Неверный nonce.');
    }
    if (isset($_POST['data'])) {
        $user_id = get_current_user_id();
        update_user_meta($user_id, 'status_auto', $_POST['data']);
        wp_send_json_success('');
    } else {
        wp_send_json_error('No data received');

    }
}


?>