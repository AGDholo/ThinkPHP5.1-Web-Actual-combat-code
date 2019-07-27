@extends('_layout.default')
@section('title', '查看所有用户')
@section('content')
<div>
  <div class="list-group list-group-flush">
    @foreach ($users as $user)
    <div class="list-group-item">
      <a href="{{ url('user/auth/read', ['id' => $user->id]) }}">
        {{ $user->name }}
      </a>
      @if ($god && !$user->god)
      <form action="{{ url('user/auth/delete', ['id' => $user->id]) }}" method="post" class="float-right">
        @php echo token() @endphp
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
      </form>
      @endif
    </div>
    @endforeach
  </div>

  <div class="mt-3">
    {!! $users !!}
  </div>
</div>
@stop