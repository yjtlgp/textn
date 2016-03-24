<h1>修改留言</h1></br>
<form method="post" action="index.php?r=text/updateall">
<input type="hidden" name="liu" value="<?php echo $arr[0]['l_id']?>">
<textarea name="desc"><?echo $arr[0]['l_desc']?></textarea></br>
<input type='submit'>
</form>