<?php

use app\Api\config\route\KanRoute;
use app\Api\validate\KanValidate;

return [
    "kan" => [
        "validate"=>KanValidate::class,
        "action" => kanRoute::config()
    ],
];