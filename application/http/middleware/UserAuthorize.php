<?php

namespace app\http\middleware;

use think\facade\Hook;

class UserAuthorize
{
    public function handle($request, \Closure $next)
    {
        $result = Hook::exec('app\\behavior\\UserPolicy', $request->id);
        return
            $result
            ? $next($request)
            : redirect('user/session/create')->with('validate', '非法操作');
    }
}
