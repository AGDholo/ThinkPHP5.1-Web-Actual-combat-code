<?php

namespace app\behavior;

use think\facade\Session;

class GodPolicy
{
  public function run()
  {
    $is_god = Session::get('user.god');

    return $is_god;
  }
}
