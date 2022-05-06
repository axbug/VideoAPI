<?php

namespace app\Api\validate;

use think\Validate;

class KanValidate extends Validate
{
    protected $rule = [
        "id"  => "require",
        "cat"  => "require",
        'catid'   => 'require',
        'blockid'   => 'require',
        'kw'  => 'require',
    ];

    protected $scene =[
        "List"  => ["catid"],
        "Rank"  => ["cat"],
        "Block"  => ["blockid"],
        "Detail"  => ["id","cat"],
        "Search"  => ["kw"],
        "Episodes"  => [],
    ];
}