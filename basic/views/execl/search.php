<html>
<meta charset="utf-8">
<body>
<div id="span">
    <center><h2>后台管理</h2></center>
    <table>
        <tr>
            <td><h3>分类管理</h3></td>
            <td>
                </br>
                <select id="area">
                    <option>请选择地区</option>
                    <option value="北京">北京</option>
                    <option value="上海">上海</option>
                    <option value="河北">河北</option>
                    <option value="山东">山东</option>
                </select>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="button" value="搜索" id="search">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="button" value="导出execl" id="daochu">
            </td>
        </tr>
        <tr>
            <td><h3>商品管理</h3></td>
            <td>

                <table border="1">
                    <th>姓名</th><th>年龄</th><th>性别</th><th>手机号</th><th>所在地区</th><th>注册时间</th><th>操作</th>
                    <? foreach($arr as $k=>$v){?>
                        <tr>
                            <td><? echo $v['u_name']?></td>
                            <td><? echo $v['u_age']?></td>
                            <td><? echo $v['u_sex']?></td>
                            <td><? echo $v['u_number']?></td>
                            <td><? echo $v['u_area']?></td>
                            <td><? echo $v['u_time']?></td>
                            <td><a href="index.php?r=execl/del&id=<? echo $v['u_id']?>">删除</a></td>
                        </tr>
                    <? }?>
                </table>
                <a>上一页</a><a>下一页</a>

            </td>
        </tr><tr>
            <td><h3>会员管理</h3></td>
        </tr><tr>
            <td><h3>促销管理</h3></td>
        </tr><tr>
            <td><h3>活动管理</h3></td>
        </tr><tr>
            <td><h3>广告管理</h3></td>
        </tr><tr>
            <td><h3>链接管理</h3></td>
        </tr><tr>
            <td><h3>订单管理</h3></td>
        </tr><tr>
            <td><h3>系统管理</h3></td>
        </tr>

    </table>
</div>
</body>
</html>
<script type="text/javascript" src="./js/jquery-1.8.3.min.js"></script>
<script>
    //    var area=document.getElementById('area');
    //    alert(area);
    //    //创建ajax对象
    //    var ajax = new XMLHttpRequest();
    //    //alert(ajax.readyState)
    //
    //    //ajax事件
    //    ajax.onreadystatechange=function(){
    //        //alert(ajax.readyState)
    //        if (ajax.readyState==4)
    //        {
    //            //接收数据
    //            //alert(ajax.responseText);
    //            document.getElementById("span").innerHTML = ajax.responseText;
    //        }
    //    }
    //    //与服务器建立连接
    //    ajax.open("get","index.php?r=execl/search&area"+area);
    //    //处理请求
    //    ajax.send(null);


    $(document).ready(function() {
        $("#search").click(function () {
            var search = $("#area").val();
            //alert(search);
            $.ajax({
                type: "POST",
                url: "index.php?r=execl/search&area="+search,
                data: "name=John&location=Boston",
                success: function (msg) {
                    //alert(msg);
                    $("#span").html(msg);

                }
            });

        });
    });
    $(document).ready(function() {
        $("#daochu").click(function () {
            var search = $("#area").val();
            //alert(search);
            $.ajax({
                type: "POST",
                url: "index.php?r=execl/daochu&area="+search,
                data: "name=John&location=Boston",
                success: function (msg) {
                    $("#span").html(msg);
                }
            });

        });
    });


</script>
