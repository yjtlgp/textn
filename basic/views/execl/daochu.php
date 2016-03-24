<?php
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="后台用户信息.xlsx"');
header('Cache-Control: max-age=0');
$str="姓名\t年龄\t性别\t手机号\t所在地区\t注册时间";
        foreach($arr as $v){
            $str.=
                "\n".$v['u_name']."\t".$v['u_age']."\t".$v['u_sex']."\t".$v['u_number']."\t".$v['u_area']."\t".$v['u_time']."\t\n";
        }
echo $str."\n";
?>