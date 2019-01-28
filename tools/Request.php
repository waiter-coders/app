<?php

namespace Tools;

use Waiterphp\Core\FilterTrait;

class Request
{
    use FilterTrait;

    private $url = '';
    private $method = '';

    public function __construct()
    {
        $this->method = !empty($_SERVER['REQUEST_METHOD']) 
            ? strtolower($_SERVER['REQUEST_METHOD']) 
            : '';
        $this->setData($_GET + $_POST);        
    }

    public function isPost()
    {
        return $this->method == 'post';
    }
}