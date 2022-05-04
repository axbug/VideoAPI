<?php

namespace app\Api\config\filter\kan;

class dianying
{
    public static function config():array
    {
        $json = self::json();
        return json_decode($json,true);
    }

    private static function json(): string
    {
        return <<< EOL
            [{
                "data": [{
                    "title": "最近热映",
                    "id": "rankhot"
                }, {
                    "title": "最近上映",
                    "id": "ranklatest"
                }, {
                    "title": "最受好评",
                    "id": "rankpoint"
                }],
                "iteratorEvents": ["click"],
                "label": "排序",
                "name": "rank",
                "defaultId": "rankhot"
            }, {
                "data": [{
                    "title": "全部",
                    "id": ""
                }, {
                    "title": "喜剧",
                    "id": "喜剧",
                    "hot": true
                }, {
                    "title": "爱情",
                    "id": "爱情"
                }, {
                    "title": "动作",
                    "id": "动作",
                    "hot": true
                }, {
                    "title": "恐怖",
                    "id": "恐怖"
                }, {
                    "title": "科幻",
                    "id": "科幻"
                }, {
                    "title": "剧情",
                    "id": "剧情"
                }, {
                    "title": "犯罪",
                    "id": "犯罪"
                }, {
                    "title": "奇幻",
                    "id": "奇幻"
                }, {
                    "title": "战争",
                    "id": "战争",
                    "hot": true
                }, {
                    "title": "悬疑",
                    "id": "悬疑"
                }, {
                    "title": "动画",
                    "id": "动画"
                }, {
                    "title": "文艺",
                    "id": "文艺"
                }, {
                    "title": "纪录",
                    "id": "纪录"
                }, {
                    "title": "传记",
                    "id": "传记"
                }, {
                    "title": "歌舞",
                    "id": "歌舞"
                }, {
                    "title": "古装",
                    "id": "古装"
                }, {
                    "title": "历史",
                    "id": "历史"
                }, {
                    "title": "惊悚",
                    "id": "惊悚"
                }, {
                    "title": "伦理",
                    "id": "伦理"
                }, {
                    "title": "其他",
                    "id": "其他"
                }],
                "iteratorEvents": ["click"],
                "label": "类型",
                "name": "cat",
                "defaultId": ""
            }, {
                "data": [{
                    "title": "全部",
                    "id": ""
                }, {
                    "title": "2022",
                    "id": "2022"
                }, {
                    "title": "2021",
                    "id": "2021"
                }, {
                    "title": "2020",
                    "id": "2020"
                }, {
                    "title": "2019",
                    "id": "2019"
                }, {
                    "title": "2018",
                    "id": "2018"
                }, {
                    "title": "2017",
                    "id": "2017"
                }, {
                    "title": "2016",
                    "id": "2016"
                }, {
                    "title": "2015",
                    "id": "2015"
                }, {
                    "title": "2014",
                    "id": "2014"
                }, {
                    "title": "2013",
                    "id": "2013"
                }, {
                    "title": "2012",
                    "id": "2012"
                }, {
                    "title": "2010",
                    "id": "2010"
                }, {
                    "title": "2009",
                    "id": "2009"
                }, {
                    "title": "2008",
                    "id": "2008"
                }, {
                    "title": "2007",
                    "id": "2007"
                }, {
                    "title": "更早",
                    "id": "lt_year"
                }],
                "iteratorEvents": ["click"],
                "label": "年代",
                "name": "year",
                "defaultId": ""
            }, {
                "data": [{
                    "title": "全部",
                    "id": ""
                }, {
                    "title": "内地",
                    "id": "大陆"
                }, {
                    "title": "中国香港",
                    "id": "香港"
                }, {
                    "title": "中国台湾",
                    "id": "台湾"
                }, {
                    "title": "泰国",
                    "id": "泰国"
                }, {
                    "title": "美国",
                    "id": "美国"
                }, {
                    "title": "韩国",
                    "id": "韩国"
                }, {
                    "title": "日本",
                    "id": "日本"
                }, {
                    "title": "法国",
                    "id": "法国"
                }, {
                    "title": "英国",
                    "id": "英国"
                }, {
                    "title": "德国",
                    "id": "德国"
                }, {
                    "title": "印度",
                    "id": "印度"
                }, {
                    "title": "其他",
                    "id": "其他"
                }],
                "iteratorEvents": ["click"],
                "label": "地区",
                "name": "area",
                "defaultId": ""
            }, {
                "data": [{
                    "title": "全部",
                    "id": ""
                }],
                "iteratorEvents": ["click"],
                "label": "明星",
                "name": "act",
                "defaultId": ""
            }]
EOL;
    }
}