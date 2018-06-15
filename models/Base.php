<?php
namespace Model;

class Base
{
    protected function table($table, $name = 'default') // 数据库访问
    {
        return table($table, $name);
    }

    protected function transaction($callback)
    {
        \Waiterphp\Core\DB::transaction($callback);
    }
}