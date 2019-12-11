<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ isset($pageTitle) ? $pageTitle . ' | ' : '' }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="{{ URL::asset('layuimini/lib/layui-v2.5.4/css/layui.css') }}" media="all">

    <script src="{{ URL::asset('layuimini/lib/layui-v2.5.4/layui.js') }}" charset="utf-8"></script>

    @yield('style')
</head>
<body>
    @yield('content')
</body>
</html>
