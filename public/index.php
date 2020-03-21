<?php
try {
    require '../vendor/autoload.php';

    // 获得请求信息
    $request = new \request\Web();

    // 路由请求
    $data = (new \router\Api($request))->route();

    // 处理返回值
    echo (new \response\Response($data))->output();
}

// 处理异常行为
catch (Exception $e) {
    echo (new \response\Response($e))->output();
}
  