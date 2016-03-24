<table>
<th>id</th><th>留言</th><th>操作</th>
<?php foreach($arr as $k=>$v){?>
<tr>
	<td><?php echo $v['l_id']?></td>
	<td><?php echo $v['l_desc']?></td>
	<td><a href='update?id=<?php echo $v['l_id']?>'>修改</a><a href='del?id=<?php echo $v['l_id']?>'>删除</a></td>
</tr>
<?php }?>
</table>
<?php echo $arr->render() ?>
