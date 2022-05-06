<?php

use app\ExceptionHandle;
use app\Request;
use app\Utils\JSON;

// 容器Provider定义文件
return [
    'think\Request'          => Request::class,
    'think\exception\Handle' => ExceptionHandle::class,
    'json'                   => JSON::class,
];
