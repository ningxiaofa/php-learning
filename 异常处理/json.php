<?php

$json_string='{
    "query":{
        "bool":{
            "must":[
                {
                    "match":{
                        "message":"ERR_AUTO_ALLOCATE"
                    }
                },
                {
                    "match":{
                        "message":{
                            "query":"query",
                            "operator":"and"
                        }
                    }
                }
            ],
            "filter":{
                "range":{
                    "@timestamp":{
                        "gte":"now-${diffMinutes}m/m",
                        "time_zone":"+08:00"
                    }
                }
            }
        }
    }
}';
$obj = json_decode($json_string,true);
var_export($obj);