<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13
 * Time: 18:00
 */

namespace Response;


class Json extends Base
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function output()
    {
        return json_encode(array('code'=>0, 'data'=>$this->data));
    }
}