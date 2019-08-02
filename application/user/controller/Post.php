<?php

namespace app\user\controller;

use think\Controller;
use think\Request;
use app\User\model\Post as PostModel;

class Post extends Controller
{
	protected $middleware = [
		'UserAuthorize' => [
			'only' => [
				'save',
			]
		]
	];

	public function save(Request $request)
	{
		PostModel::create([
			'content' => $request->content,
			'user_id' => session('user.id')
		]);
		return redirect('/');
	}
}
