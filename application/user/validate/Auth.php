<?php

namespace app\user\validate;

use think\Validate;

class Auth extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */	
	protected $rule = [
        '__token__' => 'token',
        'name|名字'  =>  'require|max:50',
        'email|邮件' =>  'require|email|unique:users|max:255',
        'password|密码' => 'require|confirm|min:6'
    ];
    
    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */	
    protected $message = [];
}
