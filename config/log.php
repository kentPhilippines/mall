<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// +----------------------------------------------------------------------
// | 日志设置
// +----------------------------------------------------------------------
return [
    // 日志记录方式，支持 file socket 或者自定义驱动类
    'type' => 'file',
    //日志保存目录
    'path' => '../runtime/logs/',
    //单个日志文件的大小限制，超过后会自动记录到第二个文件
    'file_size'     =>2097152,
    //日志的时间格式，默认是` c `
    'time_format'   =>'c',
    //api级别日志单独保存
    'apart_level'   =>  ['money'],
];
