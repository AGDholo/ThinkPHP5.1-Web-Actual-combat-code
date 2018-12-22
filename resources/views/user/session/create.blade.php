@extends('_layout.default')
@section('title', '登入')
@section('content')
<div class="col-md-offset-2 col-md-8">
    <div class="panel panel-default mt-5">
        <div class="panel-heading mb-3">
            <h4>登入</h4>
        </div>
        @if(session('validate'))
            <div class="alert alert-warning" role="alert">
                {{ session('validate') }}
            </div>
        @endif
        @if(session('user'))
            <div class="alert alert-success" role="alert">
                您已登入账户: {{ session('user')->name }}
            </div>
        @endif
        <div class="panel-body">
            <form method="POST"
                  action="{{ url('save') }}">

                @php echo token() @endphp

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">邮箱</span>
                    </div>
                    <input type="email"
                           class="form-control"
                           name="email">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">密码</span>
                    </div>
                    <input type="password"
                           class="form-control"
                           name="password">
                </div>

                <button type="submit"
                        class="btn btn-primary btn-block">登入</button>
            </form>
        </div>
    </div>
</div>
@stop