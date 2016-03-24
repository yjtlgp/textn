<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WorkSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="work-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'work_id') ?>

    <?= $form->field($model, 'work_pay') ?>

    <?= $form->field($model, 'work_job') ?>

    <?= $form->field($model, 'work_company') ?>

    <?= $form->field($model, 'work_area') ?>

    <?php // echo $form->field($model, 'work_study') ?>

    <?php // echo $form->field($model, 'work_release') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
