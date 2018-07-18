<?php
namespace Model;

use Waiterphp\Core\DaoTrait;

class User extends Base
{
//    use DaoTrait;
    public function infoById($id)
    {
        return $id;
    }
}