<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <meta name="description" content="linkhub">
    <meta name="author" content="everettjf">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LinkHub - My favorite link manager</title>
    <link rel="icon" href="/static/img/favicon.ico">
    <link href="/static/css/app.css" rel="stylesheet">
    <link href="/static/components/semantic/dist/semantic.min.css" rel="stylesheet">

    @yield('endofhead')

</head>
<body>

<div class="ui top attached tabular menu">
    <div class="item">
        <img src="/static/img/favicon.ico">
    </div>
    <a href="{{url('')}}" class="item active">首页 </a>
    <a href="{{url('topic')}}" class="item">话题 </a>
    @if(!Auth::guest())
    <a href="{{url('home')}}" class="item">我的链接 </a>
    @endif
    <div class="right menu">

        @if(Auth::guest())
            <a href="{{url('auth/login')}}" class="item">登录 </a>
            <a href="{{url('auth/register')}}" class="item">注册 </a>
        @else
            <a href="{{url('home/dashboard')}}" class="item">个人中心 </a>


            <div class="ui dropdown item">
                更多
                <i class="dropdown icon"></i>
                <div class="menu">
                    <a href="{{ url('auth/logout') }}" class="item">退出</a>
                </div>
            </div>
        @endif
    </div>
</div>
<div class="ui bottom attached segment">

@yield('content')

</div>


<script src="/static/components/jquery/dist/jquery.min.js"></script>
<script src="/static/components/semantic/dist/semantic.min.js"></script>
<script src="/static/js/app.js"></script>

@yield('endofbody')


</body>

</html>
