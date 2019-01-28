<?php
$config = [];

// 添加数据库配置
$config['database'] = load_configs('database.php', __DIR__);

return $config;