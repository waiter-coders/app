<?php
namespace Dao;

class Base
{
    protected function config($config)
    {
        return scenes('main')->getConfig($config);
    }

    protected function table($table, $name = 'default') // 数据库访问
    {
        return table($table, $name);
    }

    protected function transaction($callback)
    {
        \Waiterphp\Core\DB\Database::transaction($callback);
    }

    protected function model($class)
    {
        return scenes('main')->object('model.' . $class);
    }

    protected function service($class)
    {
        return scenes('main')->object('service.' . $class);
    }
}