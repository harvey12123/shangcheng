<?php

$debug = [
    'show_page_trace' => isset($_GET['debug'])
];

// 本地 Homestead 开发环境
if ($_SERVER['HTTP_HOST'] == 'dev.jabrielcloud.com') {
    $debug['db_host'] = '127.0.0.1';
    $debug['db_port'] = '3306';
}

return $debug;
