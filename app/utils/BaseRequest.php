<?php

namespace app\Utils;

use GuzzleHttp\Client;

class BaseRequest
{
    public static function Request(string $url = "", string $methods = "GET", array $data = [],array $header = []): string
    {
        $client = new Client();
        $result = $client->request($methods, $url,[
            'query' => $data,
            'headers' => $header
        ]);
        return (string)$result->getBody();
    }

    public static function Get(string $url = "", array $data = [],array $header = [
        'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36',
        'Accept-Encoding' => 'gzip, deflate, br',
    ]): string{
        return self::Request($url,"GET",$data,$header);
    }

    public static function Post(string $url = "", array $data = [],array $header = [
        'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36',
        'Accept-Encoding' => 'gzip, deflate, br',
    ]): string{
        return self::Request($url,"POST",$data,$header);
    }
}