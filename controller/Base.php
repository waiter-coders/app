<?php
namespace controller;

use \Tools\Request as Request;

class Base
{
    public function __construct()
    {
        $this->request = $request;
    }

    protected function service($service)
    {
        return instance('service.' . $service);
    }
}