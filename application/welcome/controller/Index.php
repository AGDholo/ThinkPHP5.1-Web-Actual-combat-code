<?php

namespace app\welcome\controller;

use think\Controller;
use app\User\model\Post;

class Index extends Controller
{
	public function home()
	{
		$this->assign([
			'posts' => Post::with('user')->order('created_at', 'desc')->paginate(20)
		]);
		return $this->fetch();
	}

	public function help()
	{
		return view();
	}

	public function about()
	{
		return view();
	}
} 