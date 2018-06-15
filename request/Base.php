<?php
namespace Request;

class Base
{
    public static function get()
    {
        static $instance = null;
        if (!$instance) {
            $instance = new static();
        }
        return $instance;
    }
}