<?php
namespace Controller;

use \Tools\Request as Request;

class Base
{
    protected $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

}