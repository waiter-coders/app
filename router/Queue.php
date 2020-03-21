<?php

namespace router;

class Queue extends Base
{
    public function route()
    {
        // 路由设置
        $this->router->set([
            ['(\w+)/(\w+)/(\w+)', 'controller.$1.$2.$3'],
            ['(\w+)/(\w+)', 'controller.$1.$2'],            
        ]);

        // 用户路由请求
        $path = isset($_SERVER['PATH_INFO']) ? trim($_SERVER['PATH_INFO'], '/') : 'home/show';

        // 路由启动
        return $this->router->route($path, [$this->request]);
    }
}