<?php
/*
* 项目公共函数 
*/
function model($model)
{
    return instance('model.' . $model);
}

function service($service)
{
    return instance('service.' . $service);
}
function behavior($behavior)
{
    return instance('behavior.' . $behavior);
}

function config($config)
{
    return get('config.'.$config);
}

function view($viewFile, $viewParams = [])
{
    return new \Tools\View($viewFile, $viewParams);
}