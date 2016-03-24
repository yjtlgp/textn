<h1>修改留言</h1>
<form method="post" action="updateall">
<input type="hidden" name="id" value="<?php echo $arr[0]['l_id']?>">
<textarea name="liu" rows="" cols=""><?php echo $arr[0]['l_desc']?></textarea></br>
	<input type="submit">
</form>