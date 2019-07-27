<?php

namespace app\behavior;

use think\facade\Session;

class UserPolicy
{
    public function run($params)
    {
        $user_id = Session::get('user.id');

        if (!is_null($params)) {
            // 存在传入 ID $params
            return
                (int) $user_id === (int) $params
                ? true
                : false;
        } elseif (is_null($user_id)) {
            // 用户未登录
            return false;
        } else {
            /**
             * 不存在传入 ID 但是用户已登录
             * 效果等同于 if(is_null($params) && !is_null($user_id))
             */
            return true;
        }
    }
}
