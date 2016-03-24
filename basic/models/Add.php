<?php

namespace app\models;

class Add extends \yii\base\Object implements \yii\web\IdentityInterface
{
    public $u_name;
    public $u_sex;
    public $u_email;
    public $status;

    function add(){
            print_r($_POST);
            $sql="insert into admin_user('u_name','u_sex','u_email','sta tus') values('$u_name','$u_Sex','$u_email','$status')";
            echo $sql;die;

 }
}