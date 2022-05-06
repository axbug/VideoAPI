<?php

namespace app\Api\config\route;

class KanRoute{
    public static function config(): array
    {
        return [
            "list"=>[
                "scene"=>"List",
            ],
            "rank"=>[
                "scene"=>"Rank",
            ],
            "block"=>[
                "scene"=>"Block",
            ],
            "detail"=>[
                "scene"=>"Detail",
            ],
            "search"=>[
                "scene"=>"Search",
            ],
            "episodes"=>[
                "scene"=>"Episodes",
            ],
        ];
    }
}