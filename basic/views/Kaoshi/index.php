<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Generator" content="EditPlus?">
    <meta name="Author" content="">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <title>Document</title>
</head>
<body>
<h1>登陆页面</h1>
<table>
    <tr>
        <td>用户名：</td>
        <td><input type="text" name="u_name" id="u_name"></td>
    </tr>
    <tr>
        <td>密码：</td>
        <td><input type="password" name="u_pwd" id="u_pwd"></td>
    </tr>
    <tr>
        <td><input type="button" value="提交" id="but"></td>
        <td><input type="reset"></td>
    </tr>
</table>
<script src="/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#but').click(function(){
            var u_name=$('#u_name').val();
            var u_pwd=$('#u_pwd').val();
            //alert(u_pwd);
            //alert('sdfa');
            $.ajax({
                url:'index.php?r=kaoshi/login',
                type:'post',
                data:'u_name='+u_name+'&u_pwd='+u_pwd,
                dataType:'json',
                success:function(date){
                    console.log(date);
                    alert(date);
                    if(date.state=='1'){
                        alert('用户名不存在');
                    }else (date.state=='2'){
                        alert('密码错误');
                    }else (date.state=='3'){
                        alert('登陆成功');
                    }else (date.state=='4'){
                        alert('用户名存在');
                    }

                   // $("#u_name").html(date.uname);
                    //$("#u_pwd").html(date.upwd);
                }
            })

        })
    })
</script>
</body>
</html>
