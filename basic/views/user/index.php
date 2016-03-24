<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="http://www.phpstudy.com/admin/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="http://www.phpstudy.com/admin/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="http://www.phpstudy.com/admin/Css/style.css" />
    <script type="text/javascript" src="http://www.phpstudy.com/admin/Js/jquery.js"></script>
    <script type="text/javascript" src="http://www.phpstudy.com/admin/Js/jquery.sorted.js"></script>
    <script type="text/javascript" src="http://www.phpstudy.com/admin/Js/bootstrap.js"></script>
    <script type="text/javascript" src="http://www.phpstudy.com/admin/Js/ckform.js"></script>
    <script type="text/javascript" src="http://www.phpstudy.com/admin/Js/common.js"></script>

 ....................................................................................................................................

    <style type="text/css">
        body {
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }


    </style>
</head>
<body>
<form class="form-inline definewidth m20" action="" method="get">
    用户名称：
    <input type="text" name="username" id="username"class="abc input-default" placeholder="" value="">&nbsp;&nbsp;
    <button type="submit" class="btn btn-primary">查询</button>&nbsp;&nbsp;
    <button type="button" class="btn btn-success" id="addnew">新增用户</button>
</form>
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
        <th>用户id</th>
        <th>用户名称</th>
        <th>操作</th>
    </tr>
    </thead>

    <? foreach($var as $k=>$v){?>
        <tr>
	        <td><? echo $v['admin_id'] ?></td>
            <td><? echo $v['admin_name'] ?></td>
            <td>
                <a href="index.php?r=user/del&id=$v['admin_id']"><? echo "删除"?></a>
            </td>
        </tr>
    <?php }?>

</table>
</body>
</html>
<script>
    $(function () {
        

		$('#addnew').click(function(){

				window.location.href="index.php?r=user/add";
		 });


    });

	function del(id)
	{
		
		
		if(confirm("确定要删除吗？"))
		{
		
			var url = "http://www.phpstudy.com/index.php?r=user/del";
			
			window.location.href=url;		
		
		}
	
	
	
	
	}
</script>