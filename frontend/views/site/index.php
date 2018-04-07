<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/layui/css/layui.css">
    <link rel="stylesheet" href="../css/layer/theme/default/layer.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Document</title>
</head>
<body>
<div class="top-title">
    嘉兴学院南湖学院学工管理系统
    <div class="login-name">XXX，你好！<a href="#">退出</a></div>
    <div class="change-pwd">修改密码</div>
</div>
<div class="main-box">
    <div class="layui-collapse left-collapse" lay-accordion>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title">系统维护管理</h2>
            <div class="layui-colla-content layui-show">用户管理</div>
            <div class="layui-colla-content layui-show">角色权限管理</div>
            <div class="layui-colla-content layui-show">基本信息维护</div>
            <div class="layui-colla-content layui-show">通知公告管理</div>
            <div class="layui-colla-content layui-show">系统日志</div>
        </div>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title">导入模版</h2>
            <div class="layui-colla-content">标题1</div>
        </div>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title">学生基本信息管理</h2>
            <div class="layui-colla-content">标题1</div>
        </div>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title">学生成绩管理</h2>
            <div class="layui-colla-content">标题1</div>
        </div>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title">学生奖惩管理</h2>
            <div class="layui-colla-content">标题1</div>
        </div>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title">学生资助管理</h2>
            <div class="layui-colla-content">标题1</div>
        </div>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title">学生队伍管理</h2>
            <div class="layui-colla-content">标题1</div>
        </div>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title">学生党建管理</h2>
            <div class="layui-colla-content">标题1</div>
        </div>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title">学生公寓管理</h2>
            <div class="layui-colla-content">标题1</div>
        </div>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title">学生请假管理</h2>
            <div class="layui-colla-content">标题1</div>
        </div>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title">查询报表</h2>
            <div class="layui-colla-content">标题1</div>
        </div>
    </div>
    <div class="main-content">
        <fieldset class="layui-elem-field">
            <legend>通知通告</legend>
            <div class="layui-field-box">
                内容区域
            </div>
        </fieldset>
        <fieldset class="layui-elem-field">
            <legend>待办事物</legend>
            <div class="layui-field-box">
                内容区域
            </div>
        </fieldset>
        <fieldset class="layui-elem-field">
            <legend>警告提醒</legend>
            <div class="layui-field-box">
                内容区域
            </div>
        </fieldset>
    </div>
</div>
<script src="https://cdn.bootcss.com/jquery/2.2.1/jquery.js"></script>
<script src="../css/layui/layui.js"></script>
<script src="../css/layer/layer.js"></script>
<script>
    //注意：折叠面板 依赖 element 模块，否则无法进行功能性操作
    layui.use('element', function() {
        var element = layui.element;
    });
    $('.change-pwd').on('click',function() {
        var html = '<div class="modal-chg-pwd"><div class="title">修改密码</div><div class="layui-form-item"><label class="layui-form-label">原密码</label><div class="layui-input-block"><input type="text" name="title" required  lay-verify="required" placeholder="至少6位，禁止使用符号" autocomplete="off" class="layui-input"></div></div>'
        html += '<div class="layui-form-item"><label class="layui-form-label">新密码</label><div class="layui-input-block"><input type="text" name="title" required  lay-verify="required" placeholder="至少6位，禁止使用符号" autocomplete="off" class="layui-input"></div></div>';
        html += '<div class="layui-form-item"><label class="layui-form-label">确认密码</label><div class="layui-input-block"><input type="text" name="title" required  lay-verify="required" placeholder="至少6位，禁止使用符号" autocomplete="off" class="layui-input"></div></div>';
        html += '<button class="layui-btn layui-btn-primary cancel-chg-pwd">取消</button><button class="layui-btn layui-btn-primary">确定</button></div>';
        layer.open({
            type: 1,
            title: '修改密码',
            skin: 'layui-layer-rim', //加上边框
            area: ['420px', '300px'], //宽高
            content: html
        });
        $('.cancel-chg-pwd').on('click',function() {
            layer.closeAll();
        })
    });
</script>
</body>
</html>