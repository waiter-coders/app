<?php
namespace Router;

class Web
{
    private $request;

    public function __construct(\Request\Base $request)
    {
        $this->request = $request;
    }

    public function targetAction()
    {
        return 'controller.home.show';
//        $path = isset($_SERVER['PATH_INFO']) ? trim($_SERVER['PATH_INFO'], '/') : '';
//        $path = $this->request->path();
//        $route = !empty($path) ? 'controller.' . str_replace('/', '.', $path) : 'controller.home.show';
//        return $route;
    }
}