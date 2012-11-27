<?php
/* @var $this CountersReadingsController */
/* @var $model CountersReadings */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'counters-readings-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'counter_id'); ?>
		<?php echo $form->textField($model,'counter_id'); ?>
		<?php echo $form->error($model,'counter_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reading_date'); ?>
		<?php echo $form->textField($model,'reading_date'); ?>
		<?php echo $form->error($model,'reading_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'counter_state'); ?>
		<?php echo $form->textField($model,'counter_state',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'counter_state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'use'); ?>
		<?php echo $form->textField($model,'use',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'use'); ?>
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