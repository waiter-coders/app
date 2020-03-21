<?php

namespace Tests\Model;

use Tests\TestCase;


class Base extends TestCase
{
    protected function runAction($model, $request)
    {
        return action('model.' . $controller, [$request]);
    }
}