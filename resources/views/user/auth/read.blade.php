@extends('_layout.default')
@section('title', $user->name)
@section('content')
<div class="col-md-offset-2 col-md-8">
    <div class="panel panel-default mt-5">
        <div class="panel-heading mb-3">
            <h4>欢迎您 {{ $user->name }}</h4>
            <a class="btn btn-primary" href="{{ url('user/auth/edit', ['id' => session('user.id')]) }}">编辑资料</a>
        </div>
    </div>
</div>
@stop