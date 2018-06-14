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
// | 模板设置
// +----------------------------------------------------------------------

return [
    // 模板引擎类型
    'type' => 'Blade',
    // 视图基础目录（集中式）
    'view_base' => Env::get('ROOT_PATH') . 'resources' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR,
    // 模板起始路径
    'view_path' => Env::get('ROOT_PATH') . 'resources' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR,
    // 模板文件名分隔符
    'view_depr' => DIRECTORY_SEPARATOR,
    // 模板文件后缀
    'view_suffix' => 'blade.php',
    'cache' => [
        'cache_subdir' => false,
        'prefix' => '',
    ],
    'tpl_replace_string' => [], 
];
