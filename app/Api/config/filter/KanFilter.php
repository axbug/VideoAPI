<?php

namespace app\Api\config\filter;

use app\Api\config\filter\kan\dianshi;
use app\Api\config\filter\kan\dianying;
use app\Api\config\filter\kan\dongman;
use app\Api\config\filter\kan\zongyi;

class KanFilter
{
    public static function all(): array
    {
        return [
            "dianshi" => self::dianshi(),
            "dianying" => self::dianying(),
            "zongyi" => self::zongyi(),
            "dongman" => self::dongman()
        ];
    }

    public static function dianshi(): array
    {
        return dianshi::config();
    }

    public static function dianying(): array
    {
        return dianying::config();
    }

    public static function zongyi(): array
    {
        return zongyi::config();
    }

    public static function dongman(): array
    {
        return dongman::config();
    }
}