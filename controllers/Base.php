<?php
namespace Controller;

class Base
{
    protected $request;
    protected $container;

    public function __construct()
    {
        $this->request = new \Request\Web();
        $this->container =  container('app');
    }

    protected function model($class)
    {
        return $this->container->object('model.' . $class);
    }

    protected function service($class)
    {
        return $this->container->object('service.' . $class);
    }

    protected function call($behavior)
    {
        return $this->container->object('action.' . $behavior);
    }

    protected function event($behavior)
    {
        $this->container->object('action.' . $behavior);
        return true;
    }

    protected function config($config)
    {
        return $this->container->getConfig($config);
    }

    protected function view($viewFile, $viewParams = array())
    {
        return new self();
    }
}