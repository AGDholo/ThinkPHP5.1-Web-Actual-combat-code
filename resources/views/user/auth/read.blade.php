@extends('_layout.default')
@section('title', $user->name)
@section('content')
<div class="panel panel-default list-group-flush">
    <div class="panel-heading">
        <h4>
            @if(!is_null($session) && $session->id === $user->id)
            <a class="btn btn-primary" href="{{ url('user/auth/edit', ['id' => session('user.id')]) }}">
                编辑资料
            </a>
            欢迎您
            @else
            您正在查看
            @endif
            {{ $user->name }}
        </h4>
    </div>
    @foreach ($user->posts as $post)
    <div class="list-group-item">
        <p>
            {{ $post->content }}
        </p>
        {{ $post->created_at }}
    </div>
    @endforeach
</div>
@stop