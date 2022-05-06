<?php

namespace app\Api\service;

use app\utils\BaseCache;
use app\Utils\BaseRequest;
use app\Utils\Url;

class KanService
{
    public static function List($params): array
    {
        $url = Url::Kan("/filter/list");
        return self::DefaultRequestToGet($url,$params);
    }

    public static function Rank($params): array
    {
        $url = Url::Kan("/rank");
        return self::DefaultRequestToGet($url,$params);
    }

    public static function Block($params): array
    {
        $url = Url::Kan("/block");
        return self::DefaultRequestToGet($url,$params);
    }

    public static function Detail($params): array
    {
        $url = Url::Kan("/detail");
        return self::DefaultRequestToGet($url,$params);
    }

    public static function Search($params): array
    {
        $url = Url::KanSo("/index");
        return self::DefaultRequestToGet($url,$params,"code");
    }

    public static function Episodes($params): array
    {
        $url = Url::KanSo("/episodesv2");
        return self::DefaultRequestToGet($url,$params,"code");
    }

    private static function DefaultRequestToGet(string $url,array $params,string $statusKey = "errno"): array
    {
        $result = BaseRequest::Get($url,$params);
        return self::CheckResult($result,$statusKey);
    }

    private static function CheckResult(string $result,string $statusKey = "errno"):array{
        if(empty($result)) app("json")->Error("服务器内部请求异常！");
        $data = json_decode($result,true);
        if($data[$statusKey]) app("json")->Error($data["msg"]);
        if(env("Cache.Kan")) BaseCache::Create($data["data"]);
        return $data["data"];
    }
}