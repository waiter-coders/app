#!/usr/bin/env php
<?php
require __DIR__ . '/vendor/autoload.php';

$input = \Waiterphp\Core\Console\Shell::();
$action = array_shirft($input);

$dispatcher = new \Waiterphp\Builder\Dispatcher(__DIR__);

// 自定义命令包
$dispatcher->setBuilderRelative([

]);

// 运行代码生成器
$input = formatInput($input);
$dispatcher->build($action, $input);

function formatInput($input)
{
    return $input;
}
