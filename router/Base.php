<?php
namespace router;

use request\Base as Request;

abstract class Base
{
    protected $router;
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->router = new \waiterphp\core\routing\Router();
    }

    abstract public function route();
}