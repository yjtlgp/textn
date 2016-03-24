<select id="change">
    <option>请选择...</option>
<?php
    foreach($arr as $k=>$v){
?>

        <option value="<? echo $v['parent_id']?>"><? echo $v['region_name']?></option>

<?php
    }
?>
</select>
<script type="text/javascript" src="./js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#change").change(function(){
            var change=$('#change').val();
            //alert(change);
            $.post("index.php?r=san/aa", { "change": cahnge },
                function(data){
                    alert(data); // John
                    console.log(data); //  2pm
                }, "json");
        })
    })
</script>