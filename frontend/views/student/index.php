<?php
use yii\web\View;

$this->registerJsFile("@web/css/layer/layer.js", ['depends' => ['frontend\assets\AppAsset'], 'position' => View::POS_END]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="../css/layer/theme/default/layer.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Document</title>
</head>
<body>
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
        <form class="layui-form" action="">
            <div class="layui-col-xs4 layui-col-md2">
                <div class="layui-form-item">
                    <label class="layui-form-label">系部</label>
                    <div class="layui-input-block">
                        <select name="interest" lay-filter="aihao">
                            <option value=""></option>
                            <option value="0">数理系</option>
                            <option value="1" selected="">阅读</option>
                            <option value="2">游戏</option>
                            <option value="3">音乐</option>
                            <option value="4">旅行</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="layui-col-xs4 layui-col-md2">
                <div class="layui-form-item">
                    <label class="layui-form-label">专业</label>
                    <div class="layui-input-block">
                        <select name="interest" lay-filter="aihao">
                            <option value=""></option>
                            <option value="0">计算机科学与技术</option>
                            <option value="1" selected="">阅读</option>
                            <option value="2">游戏</option>
                            <option value="3">音乐</option>
                            <option value="4">旅行</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="layui-col-xs4 layui-col-md2">
                <div class="layui-form-item">
                    <div class="layui-inline">
                        <label class="layui-form-label">班级</label>
                        <div class="layui-input-block">
                            <input type="tel" name="phone" lay-verify="required|phone" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                </div>
            </div>
            <div class="layui-col-xs4 layui-col-md2">
                <div class="grid-demo grid-demo-bg1">
                    <div class="layui-form-item">
                        <div class="layui-inline">
                            <label class="layui-form-label">姓名</label>
                            <div class="layui-input-block">
                                <input type="tel" name="phone" lay-verify="required|phone" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layui-col-xs4 layui-col-md2">
                <div class="grid-demo grid-demo-bg1">
                    <div class="layui-form-item">
                        <div class="layui-inline">
                            <label class="layui-form-label">学号</label>
                            <div class="layui-input-block">
                                <input type="tel" name="phone" lay-verify="required|phone" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layui-col-xs4 layui-col-md2">
                <div class="grid-demo grid-demo-bg1">
                    <div class="layui-form-item">
                        <div class="layui-inline">
                            <label class="layui-form-label">辅导员</label>
                            <div class="layui-input-block">
                                <input type="tel" name="phone" lay-verify="required|phone" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layui-col-xs4 layui-col-md2">
                <div class="grid-demo grid-demo-bg1">
                    <div class="layui-form-item">
                        <div class="layui-inline">
                            <label class="layui-form-label">班主任</label>
                            <div class="layui-input-block">
                                <input type="tel" name="phone" lay-verify="required|phone" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layui-col-xs4 layui-col-md2">
                <div class="layui-form-item">
                    <label class="layui-form-label">楼宇</label>
                    <div class="layui-input-block">
                        <select name="interest" lay-filter="aihao">
                            <option value=""></option>
                            <option value="0">公寓八</option>
                            <option value="1" selected="">阅读</option>
                            <option value="2">游戏</option>
                            <option value="3">音乐</option>
                            <option value="4">旅行</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="layui-col-xs4 layui-col-md2">
                <div class="grid-demo grid-demo-bg1">
                    <div class="layui-form-item">
                        <div class="layui-inline">
                            <label class="layui-form-label">寝室号</label>
                            <div class="layui-input-block">
                                <input type="tel" name="phone" lay-verify="required|phone" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layui-col-xs4 layui-col-md2">
                <div class="layui-form-item">
                    <label class="layui-form-label">状态</label>
                    <div class="layui-input-block">
                        <select name="interest" lay-filter="aihao">
                            <option value=""></option>
                            <option value="0">在读</option>
                            <option value="1" selected="">阅读</option>
                            <option value="2">游戏</option>
                            <option value="3">音乐</option>
                            <option value="4">旅行</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="layui-col-xs8 layui-col-md4">
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn" lay-submit="" lay-filter="demo1">查询</button>
                        <button type="reset" class="layui-btn layui-btn-primary">取消</button>
                    </div>
                </div>
            </div>
        </form>

        <div class="layui-col-md12">
            <div class="layui-btn-group">
                <button class="layui-btn">提交/审核</button>
                <button class="layui-btn ">驳回</button>
                <button class="layui-btn">批量导出</button>
            </div>
        </div>
        <div class="layui-col-md12">
            <table class="layui-hide" id="test"></table>
        </div>
    </div>
</div>
<script src="https://cdn.bootcss.com/jquery/2.2.1/jquery.js"></script>
<script src="../css/layui/layui.js"></script>
<script src="../css/layer/layer.js"></script>
<script>
    layui.use(['form'], function(){

    });
</script>
<script>
    layui.use('table', function(){
        var table = layui.table;
        table.render({
            elem: '#test'
            ,url:'/student/table'
            ,cols: [[
                {type:'checkbox'}
                ,{field:'id', width:80, title: 'ID', sort: true}
                ,{field:'username', width:80, title: '用户名'}
                ,{field:'sex', width:80, title: '性别', sort: true}
                ,{field:'city', width:80, title: '城市'}
                ,{field:'sign', title: '签名', minWidth: 100}
                ,{field:'experience', width:80, title: '积分', sort: true}
                ,{field:'score', width:80, title: '评分', sort: true}
                ,{field:'classify', width:80, title: '职业'}
                ,{field:'wealth', width:135, title: '财富', sort: true}
            ]]
            ,page: true
        });
    });
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