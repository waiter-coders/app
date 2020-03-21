<?php
namespace controller\qa;
use controller\Base;

class Search extends Base
{
    public function recList($request)
    {
        $lastId = $request->getString('lastId', 0);
        $newList = $this->service('qa.Qa')->newList($lastId);
        return $newList;
    }

    public function search($request)
    {
        $keywords = $request->getString('s');
        $search = $this->service('qa.Qa')->search($keywords);
        return $search;
    }
}