<html>
<h1>评分</h1>
<form action="index.php?r=company/company" method="post">
评分：<input type="radio" value="10"/>10分<input type="radio" value="8"/>8分<input type="radio" value="6"/>6分<input type="radio" value="4"/>4分<input type="radio" value="2"/>2分
<br/>
<input type="button" value="评分">
</form>
</html>
<script>
    function $(dian){
        location.href="index.php?r=company/company";
    }
</script>