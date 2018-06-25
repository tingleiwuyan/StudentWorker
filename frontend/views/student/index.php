<?php
use yii\web\View;

$this->registerJsFile("@web/css/layer/layer.js", ['depends' => ['frontend\assets\AppAsset'], 'position' => View::POS_END]);
?>
<div class="main-content">
    <form class="layui-form" action="">
        <div class="layui-col-xs4 layui-col-md2">
            <div class="layui-form-item">
                <label class="layui-form-label">系部</label>
                <div class="layui-input-block">
                    <select id="dept" name="dept" lay-filter="aihao">
                        <option value=""></option>
                        <option value="南湖学院化学与纺织工程系" <?= $dept == '南湖学院化学与纺织工程系' ?"selected":""?> >南湖学院化学与纺织工程系</option>
                        <option value="南湖学院数理与信息工程系" <?= $dept == '南湖学院数理与信息工程系' ?"selected":""?> >南湖学院数理与信息工程系</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="layui-col-xs4 layui-col-md2">
            <div class="layui-form-item">
                <label class="layui-form-label">专业</label>
                <div class="layui-input-block">
                    <select id="pro" name="pro" lay-filter="aihao">
                        <option value=""></option>
                    </select>
                </div>
            </div>
        </div>
        <div class="layui-col-xs4 layui-col-md2">
            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label">班级</label>
                    <div class="layui-input-block">
                        <input type="text" id = "class" name="class"  value="<?=$class?>" lay-verify="" autocomplete="off" class="layui-input">
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
                            <input type="text"  id ="name" name="name" value="<?=$name?>" lay-verify="" autocomplete="off" class="layui-input">
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
                            <input type="text" id ="code" name="code" value="<?=$code?>" lay-verify="" autocomplete="off" class="layui-input">
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
                            <input type="text" id ="guardian" name="guardian" lay-verify="" autocomplete="off" class="layui-input">
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
                            <input type="text" id="guardian" name="guardian" lay-verify="" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="layui-col-xs4 layui-col-md2">
            <div class="layui-form-item">
                <label class="layui-form-label">楼宇</label>
                <div class="layui-input-block">
                    <select id="building" name="building" lay-filter="aihao">
                        <option value=""></option>
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
                            <input type="text" id="dormnumber" name="dormnumber" lay-verify="" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="layui-col-xs4 layui-col-md2">
            <div class="layui-form-item">
                <label class="layui-form-label">状态</label>
                <div class="layui-input-block">
                    <select name="status" lay-filter="aihao">
                        <option value=""></option>
                        <option value="0">在读</option>
                        <option value="1" selected="">在职</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="layui-col-xs8 layui-col-md4">
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn" lay-submit="" lay-filter="demo1">查询</button>
                    <button id ='reset' type="reset" class="layui-btn layui-btn-primary">取消</button>
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

<script>
    layui.use(['form'], function(){

    });
</script>
<script>
    layui.use('table', function(){
        var table = layui.table;
        var code = $("#code").val();
        var name = $("#name").val();
        var sclass = $("#class").val();
        var pro = $('#pro').val();
        var building = $('#building').val();
        var dept = $('#dept').val();
        table.render({
            elem: '#test'
            ,url:'table?code='+code+'&name='+name+'&pro='+pro+'&building='+building+'&dept='+dept+'&class='+sclass
            ,cols: [[
                {type:'checkbox'}
                ,{field:'id', width:80, title: '序号', sort: true}
                ,{field:'checkstatus', width:80, title: '审核状态'}
                ,{field:'code', width:80, title: '学号', sort: true}
                ,{field:'name', width:80, title: '姓名', sort: true}
                ,{field:'status', width:80, title: '状态'}
                ,{field:'dept', width:80, title: '系部', sort: true}
                ,{field:'pro', width:80, title: '专业', sort: true}
                ,{field:'class', width:80, title: '班级', sort: true}
                ,{field:'classify', width:80, title: '职务', sort: true}
                ,{field:'sex', width:80, title: '性别', sort: true}
                ,{field:'idcode', width:80, title: '身份证号码', sort: true}
                ,{field:'ethnicity', width:80, title: '民族'}
                ,{field:'contacts', width:80, title: '联系方式'}
                ,{field:'duanhao', width:80, title: '短号'}
                ,{field:'jiguan', width:80, title: '籍贯'}
                ,{field:'shengyuandi', width:80, title: '生源地'}
                ,{field:'religious', width:80, title: '宗教信仰'}
                ,{field:'politicalstatus', width:80, title: '政治面貌'}
                ,{field:'addr', width:80, title: '家庭地址'}
                ,{field:'guardian', width:80, title: '监护人'}
                ,{field:'guardiancontacts', width:80, title: '监护人联系方式'}
                ,{field:'building', width:80, title: '楼宇'}
                ,{field:'dormnumber', width:80, title: '学生寝室号'}
                ,{field:'bednumber', width:80, title: '床号'}
                ,{field:'remark', width:80, title: '备注'}
            ]]
            ,page: true
        });
    });
    $('#reset').click(function () {
        window.location.href='/student/index'
    });

</script>

<script>
    //注意：折叠面板 依赖 element 模块，否则无法进行功能性操作
    layui.use('element', function() {
        var element = layui.element;
    });
</script>