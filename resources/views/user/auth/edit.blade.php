@extends('_layout.default')
@section('title', $user->name)
@section('content')
<div class="col-md-offset-2 col-md-8">
    <div class="panel panel-default mt-5">
        <div class="panel-heading mb-3">
            <h4>编辑 {{ $user->name }} 的个人资料</h4>
        </div>
        @if(session('validate'))
            <div class="alert alert-warning" role="alert">
                {{ session('validate') }}
            </div>
        @endif
        <div class="panel-body">
            <form method="POST"
                  action="{{ url('update', ['id' => $user->id]) }}">

                @php echo token() @endphp

                <input type="hidden" name="_method" value="PUT" >

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">用户名</span>
                    </div>
                    <input type="text"
                           class="form-control"
                           placeholder="{{ $user->name }}"
                           name="name">
                </div>

                <button type="submit"
                        class="btn btn-primary btn-block">更新</button>
            </form>
        </div>
    </div>
</div>
@stop