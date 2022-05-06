<?php

namespace app\utils;

use think\facade\Cache;
use think\facade\Request;

class BaseCache
{
    public static function Create($value){
        if(!empty($value)){
            $data = is_array($value)?json_encode($value):$value;
            Cache::set(self::Sign(),$data,env("cache.time"));
        }
    }

    public static function Get($name=""){
        $key = empty($name)?self::Sign():$name;
        $value = Cache::get($key,null);
        $data = json_decode($value,true);
        return $data??$value;
    }

    public static function Sign(): string
    {
        $appname = app('http')->getName(true);
        $controller = Request::controller(true);
        $action = Request::action(true);
        $params = Request::param();
        sort($params);
        $data = [$appname,$controller,$action,md5(json_encode($params))];
        return implode("_",$data);
    }
}