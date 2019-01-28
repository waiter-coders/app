<?php

namespace Tools;

class Response
{
    private $data;
    private $isDebug = false;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function output()
    {
        if ($this->data instanceof \Exception) {
            return $this->errorOutput();
        }
        if ($this->data instanceof \Tools\View) {
            return $this->viewOutput();
        }
        if (is_object($this->data)) {
            $message = 'not has object parse method:' . get_class($this->data);
            $this->data = new \Exception($message);
            return $this->errorOutput();
        }
        return $this->apiOutput();
    }

    private function viewOutput()
    {
        echo $this->data->fetch();
    }

    private function apiOutput()
    {
        return json_encode(['code' => 0, 'data' => $this->data]);
    }

    private function errorOutput()
    {
        return json_encode(['code'=>502, 'msg'=>$this->data->getMessage()]);
    }
}