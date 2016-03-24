<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Work */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="work-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'work_pay')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'work_job')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'work_company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'work_area')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'work_study')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'work_release')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '添加' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
