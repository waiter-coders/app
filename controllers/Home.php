<?php
namespace Controller;

class Home extends \Controller\Base
{
    public function show()
    {
        $id = $this->request->getInt('id', 0);
        return $this->model('user')->infoById($id);
    }
}