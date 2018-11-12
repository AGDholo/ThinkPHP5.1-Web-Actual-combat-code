@extends('_layout.default')
@section('title', '注册')
@section('content')
<div class="col-md-offset-2 col-md-8">
    <div class="panel panel-default mt-5">
        <div class="panel-heading mb-3">
            <h4>注册</h4>
        </div>
        <div class="panel-body">
            <form method="POST"
                  action="{{ url('save') }}">

                <input type="hidden" name="__token__" value="{{ $token }}" />

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">用户名</span>
                    </div>
                    <input type="text"
                           class="form-control"
                           name="name">
                </div>

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

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">确认密码</span>
                    </div>
                    <input type="password"
                           class="form-control"
                           name="password_confirmation">
                </div>

                <button type="submit"
                        class="btn btn-primary btn-block">注册</button>
            </form>
        </div>
    </div>
</div>
@stop