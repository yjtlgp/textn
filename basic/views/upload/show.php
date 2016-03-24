<?php
    header("content-type:text/html;charset=utf8");
//print_r($var);die;
echo "<table border='1'>";
echo "<tr>";
    echo "<th>文件名</th><th>图片</th>";
echo "</tr>";
foreach($var as $k=>$v){
    echo "<tr>";
        echo "<td>".$v['image_file']."</td>";
        echo "<td>"."<img src=".$v['image_name']." width='200' height='200'/></td>";
        echo "<td><a href=''>删除</a></td>";
    echo "</tr>";
}
echo "<tr></tr>";
echo "</table>";
?>