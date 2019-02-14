<?php
try {
    // 初始化环境变量
    ini_set('register_global', false);
    date_default_timezone_set('Asia/Shanghai'); // 默认为东八区
    header("Content-type: text/html; charset=utf-8"); // 默认字符为utf8

    // 装载环境运行所需文件
    require realpath(__DIR__) . '/vendor/autoload.php';
    require 'function.php';

    // 初始化会话
    ini_set('session.save_path', realpath(__DIR__ . '/storage/tmp/session'));
    ini_set('session.gc_maxlifetime', 86400);
    ini_set('session.cookie_lifetime', 86400);
    session_set_save_handler(new \Tools\Session(), true);
    session_start();

    // 获取环境配置
    $configsPaths = [__DIR__ . '/config/',  __DIR__ . '/../config'];//项目配置和个人或服务器配置
    $configs = (isset($_ENV['app']) && is_array($_ENV['app'])) ? $_ENV['app'] : []; // php环境配置
    $configs = array_deep_cover($configs, load_configs('web.php', $configsPaths));

    // 设置环境配置
    set_env($configs);
}

// 处理异常行为
catch (Exception $e) {
    echo (new \Response\Error($e))->output();
}