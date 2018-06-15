<?php


namespace Response;


class Error extends Base
{
    private $e;

    public function __construct(\Exception $e)
    {
        $this->e = $e;
    }

    public function output()
    {
        return json_encode(array('code'=>$this->e->getCode(), 'msg'=>$this->e->getMessage()));
    }

}