<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ isset($pageTitle) ? $pageTitle : '后台管理系统' }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="{{ asset('layuimini/lib/layui-v2.5.4/css/layui.css') }}" media="all">

    <script src="{{ asset('layuimini/lib/layui-v2.5.4/layui.js') }}" charset="utf-8"></script>
    <script src="{{ asset('layuimini/lib/jquery-3.4.1/jquery-3.4.1.min.js') }}" charset="utf-8"></script>

    @yield('style')
</head>
<body>
    @yield('content')
</body>
</html>
