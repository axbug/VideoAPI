<?php

namespace app\Utils;

class Url
{
    public static function Kan($url){
        return env("API.KAN") . $url;
    }

    public static function KanSo($url){
        return env("API.KANSO") . $url;
    }
}