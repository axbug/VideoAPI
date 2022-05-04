<?php

use app\Api\config\action\KanAction;
use app\Api\validate\KanValidate;

return [
    "kan" => [
        "validate"=>KanValidate::class,
        "action" => KanAction::config()
    ],
];