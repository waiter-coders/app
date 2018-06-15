<?php
namespace Behaviors;

class App extends Base
{
    public function listen()
    {
        $this->register('response', 'response');
        $this->register('response', 'response');
    }

    private function response()
    {

    }
}