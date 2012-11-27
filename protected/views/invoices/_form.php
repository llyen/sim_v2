<?php
/* @var $this InvoicesController */
/* @var $model Invoices */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'invoices-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tariff_id'); ?>
		<?php echo $form->textField($model,'tariff_id'); ?>
		<?php echo $form->error($model,'tariff_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'object_id'); ?>
		<?php echo $form->textField($model,'object_id'); ?>
		<?php echo $form->error($model,'object_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'supplier_id'); ?>
		<?php echo $form->textField($model,'supplier_id'); ?>
		<?php echo $form->error($model,'supplier_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'period_since'); ?>
		<?php echo $form->textField($model,'period_since'); ?>
		<?php echo $form->error($model,'period_since'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'period_to'); ?>
		<?php echo $form->textField($model,'period_to'); ?>
		<?php echo $form->error($model,'period_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'issue_date'); ?>
		<?php echo $form->textField($model,'issue_date'); ?>
		<?php echo $form->error($model,'issue_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
		<?php echo $form->error($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_user'); ?>
		<?php echo $form->textField($model,'create_user',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'create_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_date'); ?>
		<?php echo $form->textField($model,'update_date'); ?>
		<?php echo $form->error($model,'update_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_user'); ?>
		<?php echo $form->textField($model,'update_user',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'update_user'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->