<?php

namespace app\behavior;

use think\facade\Session;

class UserPolicy
{
    public function run($params)
    {
        return
            (int) Session::get('user.id') === (int) $params
            ? true
            : false;
    }
}
