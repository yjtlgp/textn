<html>
<h1>企业列表</h1>
    <table border="1">
        <th>企业名称</th> <th>企业评分</th> <th>企业详情</th>
        <?
            foreach($arr as $k=>$v){
                foreach($v as $kk=>$vv) {
                    //print_r($arr);
                    //print_r($vv);
                    ?>
                    <tr>
                        <td><?php echo $vv['c_name']?></td>
                        <td><?php echo $vv['c_count']?></td>
                        <td><a href="index?r=company/qing&id=<?php  echo $vv['c_id'] ?>">企业详情</a></td>

                    </tr>
                <?
                }
            }
        ?>
        <tr><td><a href="">首页</a>  <a href="">上一页</a></td><td><a href="">下一页</a></td><td><a href="">尾页</a></td></tr>

    </table>
</html>
