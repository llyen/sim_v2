<?php
/* @var $this SiteController */
/* @var $model ChangePasswordForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' :: Zmień hasło';
//$this->layout='//layouts/oneCol';
$this->layout='//layouts/column1';
?>

<div id="login">
<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'changepassword-form',
    'type'=>'vertical',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
    'htmlOptions'=>array('class'=>'well'),
)); ?>

<?php echo $form->errorSummary($model); ?>
<?php //echo $form->passwordFieldRow($model, 'currentPassword', array('class'=>'span3')); ?>
<?php echo $form->passwordFieldRow($model, 'newPassword', array('class'=>'span3')); ?>
<?php echo $form->passwordFieldRow($model, 'newPasswordRepeat', array('class'=>'span3')); ?>

<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Zmień hasło')); ?>

<?php $this->endWidget(); ?>
</div>