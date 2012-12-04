<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' :: Login';
$this->layout='//layouts/oneCol';
?>

<div id="login">
	<div id="title">Formularz logowania</div>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="row">
		<?php echo $form->labelEx($model, 'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
	</div>

	<!--<div class="row rememberMe">
		<?php //echo $form->checkBox($model,'rememberMe'); ?>
		<?php //echo $form->label($model,'rememberMe'); ?>
		<?php //echo $form->error($model,'rememberMe'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton('Zaloguj się'); ?>
	</div>

	<div class="error"><?php echo $form->error($model,'username'); ?><?php echo $form->error($model,'password'); ?></div>
	
<?php $this->endWidget(); ?>
</div><!-- login -->