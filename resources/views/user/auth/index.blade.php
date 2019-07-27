@extends('_layout.default')
@section('title', '查看所有用户')
@section('content')
<div class="offset-md-2 col-md-8">
  <h2 class="mb-4 text-center">
    所有用户
  </h2>

  <div class="list-group list-group-flush">
    @foreach ($users as $user)
    <div class="list-group-item">
      <a href="{{ url('user/auth/read', ['id' => $user->id]) }}">
        {{ $user->name }}
      </a>
    </div>
    @endforeach
  </div>

  <div class="mt-3">
    {!! $users !!}
  </div>
</div>
@stop
