<?php
$config = array();

// 添加数据库配置
$config['database'] = loadConfig(array('database.php', 'database.local.php'), __DIR__);

return $config;