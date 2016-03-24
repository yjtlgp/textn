<?php
$session = Yii::$app->session;
$session->open();
$username=$session->get('user');
echo "<h2>欢迎来到后台</h2>";
echo "恭喜".$username."登陆成功";
echo "<table border=1>";
foreach($user as $k=>$v){
?>
    <th>用户名</th><th>登陆时间</th>
    <tr>

        <td><? echo $v['g_name']?></td>
        <td><? echo $v['g_time']?></td>
    </tr>
<? }?>
</table>
<?
echo "<table border=1>";
echo "<th>站内消息</th><th>发送时间</th><th>发送人</th>";
foreach($info as $k=>$v){
?>

    <tr>

        <td><? echo $v['desc']?></td>
        <td><? echo $v['time']?></td>
        <td><? echo $v['name']?></td>
    </tr>
<? }?>
</table>


