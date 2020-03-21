<?php
namespace Router;

use \Tools\Request as Request;

abstract class Base
{
    protected $router;
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->router = new \Waiterphp\Core\Routing\Router();
    }

    abstract public function route();
}