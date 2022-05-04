<?php

namespace app\Api\config\filter\kan;

class dianshi
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
                "label": "排序",
                "name": "rank",
                "defaultId": "rankhot"
            }, {
                "data": [{
                    "title": "全部",
                    "id": ""
                }, {
                    "title": "言情",
                    "id": "言情"
                }, {
                    "title": "剧情",
                    "id": "剧情"
                }, {
                    "title": "伦理",
                    "id": "伦理"
                }, {
                    "title": "喜剧",
                    "id": "喜剧"
                }, {
                    "title": "悬疑",
                    "id": "悬疑"
                }, {
                    "title": "都市",
                    "id": "都市"
                }, {
                    "title": "偶像",
                    "id": "偶像"
                }, {
                    "title": "古装",
                    "id": "古装",
                    "hot": true
                }, {
                    "title": "军事",
                    "id": "军事"
                }, {
                    "title": "警匪",
                    "id": "警匪",
                    "hot": true
                }, {
                    "title": "历史",
                    "id": "历史"
                }, {
                    "title": "励志",
                    "id": "励志"
                }, {
                    "title": "神话",
                    "id": "神话"
                }, {
                    "title": "谍战",
                    "id": "谍战"
                }, {
                    "title": "青春",
                    "id": "青春剧"
                }, {
                    "title": "家庭",
                    "id": "家庭剧"
                }, {
                    "title": "动作",
                    "id": "动作"
                }, {
                    "title": "情景",
                    "id": "情景"
                }, {
                    "title": "武侠",
                    "id": "武侠"
                }, {
                    "title": "科幻",
                    "id": "科幻"
                }, {
                    "title": "其他",
                    "id": "其他"
                }],
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
                "label": "年代",
                "name": "year",
                "defaultId": ""
            }, {
                "data": [{
                    "title": "全部",
                    "id": ""
                }, {
                    "title": "内地",
                    "id": "内地"
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
                    "title": "日本",
                    "id": "日本"
                }, {
                    "title": "韩国",
                    "id": "韩国"
                }, {
                    "title": "美国",
                    "id": "美国"
                }, {
                    "title": "英国",
                    "id": "英国"
                }, {
                    "title": "新加坡",
                    "id": "新加坡"
                }],
                "label": "地区",
                "name": "area",
                "defaultId": ""
            }]
EOL;
    }
}