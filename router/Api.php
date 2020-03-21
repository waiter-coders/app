<?php

namespace router;

class Api extends Base
{
    public function route()
    {
        if (!isset($_SERVER['PATH_INFO'])) {
            throw new \Exception('request error');
        }

        // 路由用户请求
        $path = trim($_SERVER['PATH_INFO'], '/');
        return $this->router->set([
            ['(\w+)/(\w+)/(\w+)', 'controller.$1.$2.$3'],
            ['(\w+)/(\w+)', 'controller.$1.$2'],            
        ])->route($path, [$this->request]);
    }
}