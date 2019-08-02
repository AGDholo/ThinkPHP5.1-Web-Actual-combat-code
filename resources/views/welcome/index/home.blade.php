@extends('_layout.default')
@section('title', '主页')
@section('content')
<div>
  <form action="{{ url('user/post/save') }}" method="POST">
    @php echo token() @endphp

    <div class="form-group">
      <textarea class="form-control" rows="3" name="content"></textarea>
    </div>

    <div class="text-right">
      <button type="submit" class="btn btn-primary mt-3">发布</button>
    </div>
  </form>
</div>

<div>
  <div class="list-group list-group-flush">
    @foreach ($posts as $post)
    <div class="list-group-item">
      <div>
        {{ $post->user->name }} -- {{ $post->created_at }}
      </div>
      <div>
        {{ $post->content }}
      </div>
    </div>
    @endforeach
  </div>

  {!! $posts !!}
</div>
@stop