<!DOCTYPE HTML>
<html>
<head>
    <title>后台管理系统</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://www.phpstudy.com/css/dpl-min.css" rel="stylesheet" type="text/css" />
<link href="http://www.phpstudy.com/css/bui-min.css" rel="stylesheet" type="text/css" />
<link href="http://www.phpstudy.com/css/main-min.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="header">

    <div class="dl-title">
        <!--<img src="/chinapost/Public/assets/img/top.png">-->招聘后台管理
    </div>
    <div class="dl-log">欢迎您，<span class="dl-log-user">root</span><a href="http://www.phpstudy.com/admin/Public/login.html" title="退出系统" class="dl-log-quit">[退出]</a>
    </div>
</div>
<div class="content">
    <div class="dl-main-nav">
        <div class="dl-inform"><div class="dl-inform-title"><s class="dl-inform-icon dl-up"></s></div></div>
        <ul id="J_Nav"  class="nav-list ks-clear">
            <li class="nav-item dl-selected"><div class="nav-item-inner nav-home">系统管理</div></li>		<li class="nav-item dl-selected"><div class="nav-item-inner nav-order">业务管理</div></li>

        </ul>
    </div>
    <ul id="J_NavContent" class="dl-tab-conten">

    </ul>
</div>
<script type="text/javascript" src="http://www.phpstudy.com/js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="http://www.phpstudy.com/js/bui-min.js"></script>
<script type="text/javascript" src="http://www.phpstudy.com/js/main-min.js"></script>
<script type="text/javascript" src="http://www.phpstudy.com/js/config-min.js"></script>
<script>
    BUI.use('main',function(){
        var config = [{id:'1',menu:[{text:'系统管理',items:[{id:'12',text:'用户管理',href:'http://www.phpstudy.com/index.php/index.php?r=user/index'},{id:'4',text:'企业管理',href:'http://www.phpstudy.com/admin/Role/index.html'}]}]},{id:'7',homePage : '9',menu:[{text:'业务管理',items:[{id:'9',text:'查询业务',href:'http://www.phpstudy.com/admin/Node/index.html'}]}]}];
            new PageUtil.MainPage({
            modulesConfig : config
        });
    });
</script>
</body>
</html>