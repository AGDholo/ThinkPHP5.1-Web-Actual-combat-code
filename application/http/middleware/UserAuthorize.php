<?php

namespace app\http\middleware;

use Closure;
use think\facade\Hook;

class UserAuthorize
{
    public function handle($request, Closure $next)
    {
        $is_god = Hook::exec('app\\behavior\\GodPolicy');
        if ($is_god) {
            return $next($request);
        }

        $result = Hook::exec('app\\behavior\\UserPolicy', $request->id);
        return
            $result
            ? $next($request)
            : $this->redirect();
    }

    private function redirect()
    {
        return redirect('user/session/create')->with('validate', '非法操作');
    }
}
