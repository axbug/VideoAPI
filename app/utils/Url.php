<?php

namespace app\Utils;

class Url
{
    public static function Kan($url): string
    {
        return env("API.KAN") . $url;
    }

    public static function KanSo($url): string
    {
        return env("API.KANSO") . $url;
    }
}