<?php

namespace Tests\controller;

use Tests\TestCase;
use Tools\Request;


class Base extends TestCase
{
    public function request($data = [])
    {
        return new \Tools\Request();
    }

    protected function runAction($controller, $request)
    {
        return action('controller.' . $controller, [$request]);
    }
}