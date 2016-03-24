<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Admin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'admin_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admin_pwd')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <input type="submit" value="添加">
    </div>

    <?php ActiveForm::end(); ?>

</div>
