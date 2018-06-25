<?php
?>
<script src="/js/ajaxfileupload.js"></script>

<input type="file" id="fu_UploadFile" name="fu_UploadFile" value="" title="上传附件">
<input type="button" value="上传" onclick="upload()" />
<script>
    function upload() {
        var path = document.getElementById("fu_UploadFile").value;
        if ($.trim(path) == "") { alert("请选择要上传的文件"); return; }
        console.log("test");

        var result_msg = "";
        $.ajaxFileUpload({
            url: '/upload/index',  //这里是服务器处理的代码
            type: 'post',
            secureuri: false, //一般设置为false
            fileElementId: 'fu_UploadFile', // 上传文件的id、name属性名
            dataType: 'json', //返回值类型，一般设置为json、application/json
            data: {}, //传递参数到服务器
            success: function (data, status) {
                if (data.code == 200) {
                    alert("文件上传成功!等待导入");
                    $.ajax( {
                        type : 'get',
                        url : '/student/import?url='+data.url,
                        dataType : 'json',
                        success : function(datas) {
                            console.log(datas);
                            alert("导入完成!");
                        }
                    } );
                } else {
                    alert("文件成功处理出错！原因：" + data.error);
                }
            },
            error: function (data, status, e) {
                alert("错误：上传组件错误，请检察网络!");
            }
        });
    }
</script>