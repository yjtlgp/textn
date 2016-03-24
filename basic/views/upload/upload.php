<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use app\models\Images;
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>    <? echo "<br>"?>
<? echo "文件夹" ?><?= Html::input('text',$name='image_file',$value='图片所在文件夹')?>
<? echo "<br>"?>
<?= $form->field($model,'file')->fileInput()->label(false) ?>
    <button>上传</button>

<?php ActiveForm::end() ?>