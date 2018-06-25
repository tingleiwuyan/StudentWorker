<?php
$url = Yii::$app->request->getPathInfo();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= Yii::$app->params['frontUrl']?>/css/layui/css/layui.css">
    <link rel="stylesheet" href="<?= Yii::$app->params['frontUrl']?>/css/layer/theme/default/layer.css">
    <link rel="stylesheet" href="<?= Yii::$app->params['frontUrl']?>/css/main.css">
    <title>学工管理系统</title>
</head>

<script src="https://cdn.bootcss.com/jquery/2.2.1/jquery.js"></script>
<script src="<?= Yii::$app->params['frontUrl']?>/css/layui/layui.js"></script>
<script src="<?= Yii::$app->params['frontUrl']?>/css/layer/layer.js"></script>
<body>
<div class="top-title">
    <a href="/">嘉兴学院南湖学院学工管理系统</a>
    <div class="login-name">XXX，你好！<a href="#">退出</a></div>
    <div class="change-pwd">修改密码</div>
</div>
<div class="main-box">
    <div class="layui-collapse left-collapse" lay-accordion>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title">系统维护管理</h2>
            <div class="layui-colla-content ">用户管理</div>
            <div class="layui-colla-content ">角色权限管理</div>
            <div class="layui-colla-content ">基本信息维护</div>
            <div class="layui-colla-content ">通知公告管理</div>
            <div class="layui-colla-content ">系统日志</div>
        </div>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title">导入模版</h2>
            <div class="layui-colla-content <?= $url == 'student/test'?"layui-show":''?>"><a href="/student/test">测试导入</a></div>
        </div>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title">学生基本信息管理</h2>
            <div class="layui-colla-content <?= $url  == 'student/index'?"layui-show":''?>"><a href="/student/index">学生基本信息管理</a></div>
        </div>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title">学生成绩管理</h2>
            <div class="layui-colla-content <?= $url  == 'score/index'?"layui-show":''?>"><a href="/score/index">学生成绩管理</a></div>
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
    <?= $content ?>
</div>
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