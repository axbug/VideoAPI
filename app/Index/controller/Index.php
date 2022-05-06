<?php
namespace app\Index\controller;

use app\BaseController;
use app\Utils\BaseRequest;

class Index extends BaseController
{
    public function index()
    {
        return "360Kan API";
    }

    public function List(){
        return BaseRequest::Request();
    }
}
