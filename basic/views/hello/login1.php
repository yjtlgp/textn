<form>
    <meta charset="utf-8"/>
    <h3><font color="blue">注册页面</font></h3>
        <form method="post" action="index.php/?r=hello/login1">
         <table>
             <tr>
                 <td>用户名：</td>
                 <td><input type="text" name="username"/></td>
             </tr>
             <tr>
                 <td>密码：</td>
                 <td><input type="password" name="pwd"/></td>
             </tr>
             <tr>
                 <td></td>
                 <td><input type="submit" value="注册"/></td>
             </tr>
         </table>
        </form>
</form>

<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\base\Model;


$form = ActiveForm::begin([

    'action' => ['index.php?r=hello/login2'],

    'method'=>'post',
]);

?>
<?php echo $form->field($model,'username')->textInput();?>
<?php echo $form->field($model,'password')->passwordInput();?>
<? echo Html::submitButton('提交', ['class'=>'btn btn-primary','name' =>'submit-button']) ?>
