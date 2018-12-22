<?php

namespace app\user\model;

use think\Model;

class User extends Model
{
	// 定义运行操作的字段
	protected $field = ['name', 'email', 'password', 'avatar'];

	// 定义数据表名
	protected $table = 'users';

	// 定义时间戳字段名
	protected $createTime = 'created_at';
	protected $updateTime = 'updated_at';

	// 设置修改器
	public function setPasswordAttr($value)
	{
		return password_hash($value, PASSWORD_DEFAULT);
	}

	public function setEmailAttr($value)
	{
		return strtolower($value);
	}
}
