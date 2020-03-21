<?php
// 初始化环境变量
ini_set('register_global', false);
date_default_timezone_set('Asia/Shanghai'); // 默认为东八区
header("Content-type: text/html; charset=utf-8"); // 默认字符为utf8

// 初始化会话
ini_set('session.save_path', realpath(__DIR__) . '/storage/tmp/session');
ini_set('session.gc_maxlifetime', 86400);
ini_set('session.cookie_lifetime', 86400);
session_set_save_handler(new \tools\Session(), true);
session_start();

// 设置环境配置信息
$configs = load_configs([ __DIR__ . '/../config.php', __DIR__ . '/config.php']);
context()->init($configs);