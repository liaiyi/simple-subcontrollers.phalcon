<?php
// +----------------------------------------------------------------------
// | Queue.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace App\Utils;

class Queue
{
    public static function push($job)
    {
        $redis_key = di('config')->queue->key;
        Redis::lpush($redis_key, serialize($job));
    }

    public static function delay($job, $minute)
    {

    }
}