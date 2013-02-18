<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>true,
	'type'=>'horizontal',
)); ?>

<fieldset>
	<?php echo $form->errorSummary($model); ?>
	<?php echo $form->dropDownListRow($model, 'unit_id', $units); ?>
	<?php echo $form->textFieldRow($model, 'username', array('size'=>60, 'maxlength'=>100)); ?>
	<?php echo $form->passwordFieldRow($model, 'password', array('size'=>60, 'maxlength'=>100)); ?>
</fieldset>
<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>($model->isNewRecord ? 'Utwórz' : 'Zapisz'))); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->