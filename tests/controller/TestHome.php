<?php

namespace Tests\controller;

use Tests\TestCase;
use Tests\controller\Base;


class TestHome extends Base
{
    public function test_show()
    {
        $request = $this->request([]);
        $response = $this->runAction('home.show', $request);
        $this->assertEquals($response, '欢迎使用waiterphp');
    }
}