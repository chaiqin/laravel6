@extends('head')

@section('head')
    <link rel="stylesheet" href="{{ asset('layuimini/css/layuimini.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('layuimini/lib/font-awesome-4.7.0/css/font-awesome.min.css') }}" media="all">
@endsection

@section('body')
    <body class="layui-layout-body layuimini-all">
    <div class="layui-layout layui-layout-admin">

        <div class="layui-header header">
            <div class="layui-logo">
            </div>
            <a>
                <div class="layuimini-tool"><i title="展开" class="fa fa-outdent" data-side-fold="1"></i></div>
            </a>

            <ul class="layui-nav layui-layout-left layui-header-menu layui-header-pc-menu mobile layui-hide-xs">
            </ul>
            <ul class="layui-nav layui-layout-left layui-header-menu mobile layui-hide-sm">
                <li class="layui-nav-item">
                    <a href="javascript:;"><i class="fa fa-list-ul"></i> 选择模块</a>
                    <dl class="layui-nav-child layui-header-mini-menu">
                    </dl>
                </li>
            </ul>

            <ul class="layui-nav layui-layout-right">
                <li class="layui-nav-item">
                    <a href="javascript:;" data-refresh="刷新"><i class="fa fa-refresh"></i></a>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;" data-clear="清理" class="layuimini-clear"><i class="fa fa-trash-o"></i></a>
                </li>
                <li class="layui-nav-item layuimini-setting">
                    <a href="javascript:;">admin</a>
                    <dl class="layui-nav-child">
                        <dd>
                            <a href="javascript:;" data-iframe-tab="page/user-setting.html" data-title="基本资料" data-icon="fa fa-gears">基本资料</a>
                        </dd>
                        <dd>
                            <a href="javascript:;" data-iframe-tab="page/user-password.html" data-title="修改密码" data-icon="fa fa-gears">修改密码</a>
                        </dd>
                        <dd>
                            <a href="javascript:;" class="login-out">退出登录</a>
                        </dd>
                    </dl>
                </li>
                <li class="layui-nav-item layuimini-select-bgcolor mobile layui-hide-xs">
                    <a href="javascript:;" data-bgcolor="配色方案"><i class="fa fa-ellipsis-v"></i></a>
                </li>
            </ul>
        </div>

        <div class="layui-side layui-bg-black">
            <div class="layui-side-scroll layui-left-menu">
            </div>
        </div>

        <div class="layui-body">
            <div class="layui-tab" lay-filter="layuiminiTab" id="top_tabs_box">
                <ul class="layui-tab-title" id="top_tabs">
                    <li class="layui-this" id="layuiminiHomeTabId" lay-id=""></li>
                </ul>
                <ul class="layui-nav closeBox">
                    <li class="layui-nav-item">
                        <a href="javascript:;"> <i class="fa fa-dot-circle-o"></i> 页面操作</a>
                        <dl class="layui-nav-child">
                            <dd><a href="javascript:;" data-page-close="other"><i class="fa fa-window-close"></i> 关闭其他</a></dd>
                            <dd><a href="javascript:;" data-page-close="all"><i class="fa fa-window-close-o"></i> 关闭全部</a></dd>
                        </dl>
                    </li>
                </ul>
                <div class="layui-tab-content clildFrame">
                    <div id="layuiminiHomeTabIframe" class="layui-tab-item layui-show">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('layuimini/js/lay-config.js?v=1.0.4') }}" charset="utf-8"></script>
    <script>
        layui.use(['element', 'layer', 'layuimini'], function () {
            var $ = layui.jquery,
                element = layui.element,
                layer = layui.layer;

            var data =  {
                "clearInfo": {
                    "clearUrl": "api/clear.json"
                },
                "homeInfo": {
                    "title": "首页",
                    "icon": "fa fa-home",
                    "href": "page/welcome-1.html?mpi=m-p-i-0"
                },
                "logoInfo": {
                    "title": "LayuiMini",
                    "image": "images/logo.png",
                    "href": ""
                },
                "menuInfo": {
                    "currency": {
                        "title": "常规管理",
                        "icon": "fa fa-address-book",
                        "child": [
                            {
                                "title": "主页模板",
                                "href": "",
                                "icon": "fa fa-home",
                                "target": "_self",
                                "child": [
                                    {
                                        "title": "主页一",
                                        "href": "/test",
                                        "icon": "fa fa-tachometer",
                                        "target": "_self"
                                    },
                                    {
                                        "title": "主页二",
                                        "href": "page/welcome-2.html",
                                        "icon": "fa fa-tachometer",
                                        "target": "_self"
                                    }
                                ]
                            },
                            {
                                "title": "菜单管理",
                                "href": "page/menu.html",
                                "icon": "fa fa-window-maximize",
                                "target": "_self"
                            },
                            {
                                "title": "系统设置",
                                "href": "page/setting.html",
                                "icon": "fa fa-gears",
                                "target": "_self"
                            },
                            {
                                "title": "表格示例",
                                "href": "page/table.html",
                                "icon": "fa fa-file-text",
                                "target": "_self"
                            },
                            {
                                "title": "表单示例",
                                "href": "",
                                "icon": "fa fa-calendar",
                                "target": "_self",
                                "child": [
                                    {
                                        "title": "普通表单",
                                        "href": "page/form.html",
                                        "icon": "fa fa-list-alt",
                                        "target": "_self"
                                    },
                                    {
                                        "title": "分步表单",
                                        "href": "page/form-step.html",
                                        "icon": "fa fa-navicon",
                                        "target": "_self"
                                    }
                                ]
                            },
                            {
                                "title": "登录模板",
                                "href": "",
                                "icon": "fa fa-flag-o",
                                "target": "_self",
                                "child": [
                                    {
                                        "title": "登录-1",
                                        "href": "page/login-1.html",
                                        "icon": "fa fa-stumbleupon-circle",
                                        "target": "_blank"
                                    },
                                    {
                                        "title": "登录-2",
                                        "href": "page/login-2.html",
                                        "icon": "fa fa-viacoin",
                                        "target": "_blank"
                                    }
                                ]
                            },
                            {
                                "title": "异常页面",
                                "href": "",
                                "icon": "fa fa-home",
                                "target": "_self",
                                "child": [
                                    {
                                        "title": "404页面",
                                        "href": "page/404.html",
                                        "icon": "fa fa-hourglass-end",
                                        "target": "_self"
                                    }
                                ]
                            },
                            {
                                "title": "其它界面",
                                "href": "",
                                "icon": "fa fa-snowflake-o",
                                "target": "",
                                "child": [
                                    {
                                        "title": "按钮示例",
                                        "href": "page/button.html",
                                        "icon": "fa fa-snowflake-o",
                                        "target": "_self"
                                    },
                                    {
                                        "title": "弹出层",
                                        "href": "page/layer.html",
                                        "icon": "fa fa-shield",
                                        "target": "_self"
                                    }
                                ]
                            }
                        ]
                    },
                    "component": {
                        "title": "组件管理",
                        "icon": "fa fa-lemon-o",
                        "child": [
                            {
                                "title": "图标列表",
                                "href": "page/icon.html",
                                "icon": "fa fa-dot-circle-o",
                                "target": "_self"
                            },
                            {
                                "title": "图标选择",
                                "href": "page/icon-picker.html",
                                "icon": "fa fa-adn",
                                "target": "_self"
                            },
                            {
                                "title": "颜色选择",
                                "href": "page/color-select.html",
                                "icon": "fa fa-dashboard",
                                "target": "_self"
                            },
                            {
                                "title": "下拉选择",
                                "href": "page/table-select.html",
                                "icon": "fa fa-angle-double-down",
                                "target": "_self"
                            },
                            {
                                "title": "文件上传",
                                "href": "page/upload.html",
                                "icon": "fa fa-arrow-up",
                                "target": "_self"
                            },
                            {
                                "title": "富文本编辑器",
                                "href": "page/editor.html",
                                "icon": "fa fa-edit",
                                "target": "_self"
                            }
                        ]
                    },
                    "other": {
                        "title": "系统管理",
                        "icon": "fa fa-slideshare",
                        "child": [
                            {
                                "title": "用户管理",
                                "href": "",
                                "icon": "fa fa-meetup",
                                "target": "",
                                "child": [
                                    {
                                        "title": "用户列表",
                                        "href": "/admin/index",
                                        "icon": "fa fa-tachometer",
                                        "target": "_self"
                                    },
                                ]
                            },
                            {
                                "title": "失效菜单",
                                "href": "page/error.html",
                                "icon": "fa fa-superpowers",
                                "target": "_self"
                            }
                        ]
                    }
                }
            }
            layuimini.init(data);

            $('.login-out').on("click", function () {
                location.href = "{{ url('/logout') }}";
            });
        });
    </script>
    </body>

@endsection
