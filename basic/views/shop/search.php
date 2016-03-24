<html>
<table>
    <th>雇主联系方式</th><th>雇主需求</th>
    <? foreach($arr as $k=>$v){?>
        <tr>
            <td><? echo $v['g_phone']?></td>
            <td><? echo $v['g_desc']?></td>
        </tr>
    <?}?>
</table>
</html>