<html>
<h1>企业详情</h1>
<table border="1">
    <th>企业名称</th> <th>企业评分</th> <th>企业详情</th>
    <?
    foreach($qing as $k=>$v){
        foreach($v as $kk=>$vv) {
            //print_r($arr);
            //print_r($vv);
            ?>
            <tr>
                <td><?php echo $vv['c_name']?></td>
                <td><?php echo $vv['c_count']?></td>
                <td><a href="index?r=company/ping&id=<?php  echo $vv['c_id'] ?>">点击评分</a></td>

            </tr>
        <?
        }
    }
    ?>

</table>
</html>
