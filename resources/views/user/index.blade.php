@extends('head')

@section('body')
    <body>
    <div class="layuimini-container">
        <div class="layuimini-main">

                <div style="margin: 10px 10px 10px 10px">
                    <form class="layui-form layui-form-pane" action="">
                        <div class="layui-form-item">
                            <div class="layui-inline">
                                <label class="layui-form-label">用户名称</label>
                                <div class="layui-input-inline">
                                    <input type="text" name="name" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <a class="layui-btn" lay-submit="" lay-filter="data-search-btn">搜索</a>
                            </div>
                        </div>
                    </form>
                </div>

            <div class="layui-btn-group">
                <button class="layui-btn data-add-btn">添加</button>
                <button class="layui-btn layui-btn-danger data-delete-btn">删除</button>
            </div>
            <table class="layui-hide" id="currentTableId" lay-filter="currentTableFilter"></table>
            <script type="text/html" id="currentTableBar">
                <a class="layui-btn layui-btn-xs data-count-edit" lay-event="edit">编辑</a>
                <a class="layui-btn layui-btn-xs layui-btn-danger data-count-delete" lay-event="delete">删除</a>
            </script>
        </div>
    </div>
    <script>
        layui.use(['form', 'table'], function () {
            var $ = layui.jquery,
                form = layui.form,
                table = layui.table;

            table.render({
                elem: '#currentTableId',
                url: '/admin/getList',
                cols: [[
                    {field: 'id', width: 80, title: 'ID', sort: true},
                    {field: 'name', width: 150, title: '用户账号', sort: true},
                    {field: 'mobile', width: 150, title: '手机号码', sort: true},
                    {field: 'email', width: 150, title: '邮箱', sort: true},
                    {title: '操作', minWidth: 50, templet: '#currentTableBar', fixed: "right", align: "center"}
                ]],
                limits: [10, 15, 20, 25, 50, 100],
                limit: 1,
                page: true
            });

            // 监听搜索操作
            form.on('submit(data-search-btn)', function (data) {
                //执行搜索重载
                table.reload('currentTableId', {
                    page: {
                        curr: 1
                    }
                    , where: data.field
                });
                return false;
            });

            // 监听添加操作
            $(".data-add-btn").on("click", function () {
                layer.msg('添加数据');
            });

            // 监听删除操作
            $(".data-delete-btn").on("click", function () {
                var checkStatus = table.checkStatus('currentTableId')
                    , data = checkStatus.data;
                layer.alert(JSON.stringify(data));
            });

            //监听表格复选框选择
            table.on('checkbox(currentTableFilter)', function (obj) {
                console.log(obj)
            });

            table.on('tool(currentTableFilter)', function (obj) {
                var data = obj.data;
                if (obj.event === 'edit') {
                    layer.alert('编辑行：<br>' + JSON.stringify(data))
                } else if (obj.event === 'delete') {
                    layer.confirm('真的删除行么', function (index) {
                        obj.del();
                        layer.close(index);
                    });
                }
            });

        });
    </script>

    </body>
@endsection
