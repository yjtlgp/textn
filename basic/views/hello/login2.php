<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$form = ActiveForm::begin([

    'action' => ['index.php?r=hello/login2'],

    'method'=>'post',
]);

$model = new UsersFrom();
?>
<?php echo $form->field($model,'username')->textInput();?>
<?php echo $form->field($model,'password')->passwordInput();?>