<?php
try {
    require '../bootstrap.php';

    // 获得请求信息
    $request = new \Tools\Request();

    // 路由请求
    $data = (new \Router\Web($request))->route();

    // 处理返回值
    echo (new \Tools\Response($data))->output();
}

// 处理异常行为
catch (Exception $e) {
    echo (new \Tools\Response($e))->output();
}
  