<?php

namespace app\Api\controller;

use app\Api\service\KanService;

class KanController extends BaseController
{
    public function Filter(){
        $result = KanService::Filter();
        app("json")->Success($result);
    }

    public function List(){
        $result = KanService::List($this->request->param());
        app("json")->Success($result);
    }

    public function Rank(){
        $result = KanService::Rank($this->request->param());
        app("json")->Success($result);
    }

    public function Block(){
        $result = KanService::Block($this->request->param());
        app("json")->Success($result);
    }

    public function Detail(){
        $result = KanService::Detail($this->request->param());
        app("json")->Success($result);
    }

    public function Search(){
        $result = KanService::Search($this->request->param());
        app("json")->Success($result);
    }

    public function Episodes(){
        $result = KanService::Episodes($this->request->param());
        app("json")->Success($result);
    }
}