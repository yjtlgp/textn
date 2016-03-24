<html>
    <meta charset="utf-8">
    <body>
        <h2>注册页面</h2>（医疗入住）
        <table>
            <tr>
                <td>用户名称：</td>
                <td><input type="text" id="user"></td>
            </tr>
            <tr>
                <td>性别：</td>
                <td><input type="text" id="sex"></td>
            </tr>
            <tr>
                <td>年龄：</td>
                <td><input type="text" id="age"></td>
            </tr>
            <tr>
                <td>密码：</td>
                <td><input type="password" id="pwd"></td>
            </tr>
            <tr>
                <td>确认密码：</td>
                <td><input type="password" id="qpwd"></td>
            </tr>
            <tr>
                <td><input type="button" id="re" value="注册"></td>
                <td><input type="reset" value="重置"></td>
            </tr>
        </table>
    </body>
</html>
<script src="./js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#re').click(function () {
            var user = $('#user').val();
            var sex = $('#sex').val();
            var age = $('#age').val();
            var pwd = $('#pwd').val();
            var qpwd = $('#qpwd').val();
            //alert(qpwd);
            $.ajax({
                url:'index.php?r=yiliao/re',
                type:'POST',
                data:'name='+user+'&sex='+sex+'&age='+age+'&pwd'+pwd+'&qpwd'+qpwd,
                datatype:'json',
                success:function(aa){
                    alert(aa);
                }
            })
        })
    })
</script>