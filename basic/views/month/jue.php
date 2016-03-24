<?php
$session = Yii::$app->session;
$session->open();
$username=$session->get('user');
echo "<h2>欢迎来到后台</h2>";
echo "恭喜".$username."登陆成功";
echo "<h3>商品管理</h3>";
echo "<table border=1>";
echo "<th>商品名称</th><th>商品价格</th>";
foreach($shop as $k=>$v) {
    ?>
    <tr>
        <td><? echo $v['s_name']?></td>
        <td><? echo $v['s_name']?></td>
        <td><a href="index.php?r=month/del&id=$v['s_id']">删除</a></td>
        <td><a>修改</a></td>
    </tr>
<?
}
?>
</table>
<form method="post" action="index.php?r=month/add">
站内消息：<textarea name="desc"></textarea><br><input type="submit" value="发送">
</form>

