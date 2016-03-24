<?php
//使用小物件生成form元素
$form=$this->beginWidget('CActiveForm');
?>

    <!--用户名-->
<?php echo $form->labelEx($model,'username');?>
<?php echo $form->textField($model,'username');?>
<?php echo $form->error($model,'username');?>
    <br>

    <!--密码-->
<?php echo $form->labelEx($model,'password');?>
<?php echo $form->passwordField($model,'password');?>
<?php echo $form->error($model,'password');?>
    <br>

    <!--确认密码-->
<?php echo $form->labelEx($model,'password2');?>
<?php echo $form->passwordField($model,'password2');?>
<?php echo $form->error($model,'password2');?>
    <br>

    <!--邮箱-->
<?php echo $form->labelEx($model,'email');?>
<?php echo $form->textField($model,'email');?>
<?php echo $form->error($model,'email');?>
    <br>

    <!--性别-->
<?php echo $form->labelEx($model,'sex');?>
<?php  echo $form->radioButtonList($model,'sex',array(1=>'男',2=>'女'),array("separator"=>"&nbsp;"));?>
    <br>

    <!--年级-->
<?php echo $form->labelEx($model,'grade');?>
<?php echo $form->dropDownList($model,'grade',array(0=>"--请选择--",1=>"2010级",2=>"2011级",3=>"2012级"));?>
<?php echo $form->error($model,'grade');?>
    <br>

<?php echo $form->labelEx($model,'hobby');?>
<?php echo $form->checkBoxList($model,'hobby',array(1=>"篮球",2=>"足球",3=>"排球"),array("separator"=>"&nbsp;"));?>
<?php echo $form->error($model,'hobby');?>
    <!--提交-->
<?php echo CHtml::submitButton('提交');?>
<?php
$this->endWidget();
?>