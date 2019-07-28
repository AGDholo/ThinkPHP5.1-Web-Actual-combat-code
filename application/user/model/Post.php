<?php

namespace app\User\model;

use think\Model;

class Post extends Model
{
    // 反向关联 User 模型
    public function user()
    {
        return $this->belongsTo('User');
    }

    // 定义数据表名
    protected $table = 'posts';

    // 定义时间戳字段名
    protected $createTime = 'created_at';
    protected $updateTime = 'updated_at';
}
