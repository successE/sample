@extends('layouts.default')
@section('content')
    <div class="jumbotron">
    <h1>主页</h1>
    <p class="lead">
        欢迎来到主页面
    </p>
    <p>一切，将从这里开始</p>
    <p>
        <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>

        </p>

    </div>


@stop