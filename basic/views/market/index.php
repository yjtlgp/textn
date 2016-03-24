<?php
use yii\widgets\LinkPager;


?>
<html>
<div id="sppwd">
姓名：<input type="text" id="s_name">
报名部门:<input type="text" id="s_bumen">
所学专业:<input type="text" id="s_zhuanye">
学院:<input type="text" id="s_xueyuan">
班级：<input type="text" id="s_class">
<input type="button" value="搜索" onclick="fun()">
<br><br><br>


<table border="1">
    <th>学号</th><th>姓名</th><th>应交学费</th><th>已交学费</th><th>欠费</th><th>性别</th><th>身份证号</th><th>	学历</th><th>	民族</th><th>	籍贯</th><th>	个人电话</th><th>	报名部门	</th><th>所学专业</th><th>	学制	</th><th>入校时间	</th><th>学员状态	</th><th>学院</th><th>	班级	</th><th>是否参加高考</th>
    <?php foreach($arr as $k=>$v){?>

        <tr>
            <td><? echo $v['s_number'] ?></td>
            <td><? echo $v['s_name'] ?></td>
            <td><? echo $v['s_yprice'] ?></td>
            <td><? echo $v['s_jprice'] ?></td>
            <td><? echo $v['s_qprice'] ?></td>
            <td><? echo $v['s_sex'] ?></td>
            <td><? echo $v['s_cardid'] ?></td>
            <td><? echo $v['s_study'] ?></td>
            <td><? echo $v['s_min'] ?></td>
            <td><? echo $v['s_jiguan'] ?></td>
            <td><? echo $v['s_phone'] ?></td>
            <td><? echo $v['s_bumen'] ?></td>
            <td><? echo $v['s_zhuanye'] ?></td>
            <td><? echo $v['s_xuezhi'] ?></td>
            <td><? echo $v['s_datetime'] ?></td>
            <td><? echo $v['s_states'] ?></td>
            <td><? echo $v['s_xueyuan'] ?></td>
            <td><? echo $v['s_class'] ?></td>
            <td><? echo $v['s_shifou'] ?></td>
        </tr>
    <?}?>
</table>
    <? echo
    LinkPager::widget(
        array(
            'pagination' => $pages,
            // 'selectedPageCssClass' => 'active', //当前页的class
            //  'hiddenPageCssClass' => 'disabled', //禁用页的class
            //  'header' => '', //分页前显示的内容
            //  'maxButtonCount' => 10, //显示分页数量
            //   'htmlOptions' => array('class' => ''),
            'firstPageLabel' => '首页',
            'nextPageLabel' => '下一页',
            'prevPageLabel' => '上一页',
            'lastPageLabel' => '末页',
        )

    );?>
</div>
</html>

<script>
    function fun() {
        //创建ajax对象
        var ajax = new XMLHttpRequest();
        //alert(ajax.readyState)
        s_name = document.getElementById('s_name').value;
        s_bumen = document.getElementById('s_bumen').value;
        s_zhuanye = document.getElementById('s_zhuanye').value;
        s_xueyuan = document.getElementById('s_xueyuan').value;
        s_class = document.getElementById('s_class').value;
        //ajax事件
        //alert(s_bumen);
        ajax.onreadystatechange = function fun() {
            //alert(ajax.readyState)
            if (ajax.readyState == 4) {
                //接收数据
                //alert(ajax.responseText);
                document.getElementById("sppwd").innerHTML = ajax.responseText;
            }
        }
        //与服务器建立连接
        ajax.open("get", "index.php?r=market/search&s_name="+ s_name + "&s_bumen=" + s_bumen + "&s_zhuanye=" + s_zhuanye + "&s_xueyuan=" + s_xueyuan + "&s_class="+ s_class);
        //处理请求
        ajax.send(null);
    }
</script>
