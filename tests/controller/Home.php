<?php

namespace Tests\Controller;

use Tests\TestCase;
use Tests\Controller\Base;


class Home extends Base
{
    public function test_show()
    {
        $request = $this->request([]);
        $response = $this->runAction('home.show', $request);
        var_dump($response);
    }
}