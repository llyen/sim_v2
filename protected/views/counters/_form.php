<?php
/* @var $this CountersController */
/* @var $model Counters */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'counters-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'collection_point_id'); ?>
		<?php echo $form->textField($model,'collection_point_id'); ?>
		<?php echo $form->error($model,'collection_point_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medium_id'); ?>
		<?php echo $form->textField($model,'medium_id'); ?>
		<?php echo $form->error($model,'medium_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'symbol'); ?>
		<?php echo $form->textField($model,'symbol',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'symbol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unit'); ?>
		<?php echo $form->textField($model,'unit',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'initial_state'); ?>
		<?php echo $form->textField($model,'initial_state',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'initial_state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'installation_date'); ?>
		<?php echo $form->textField($model,'installation_date'); ?>
		<?php echo $form->error($model,'installation_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'archival'); ?>
		<?php echo $form->textField($model,'archival'); ?>
		<?php echo $form->error($model,'archival'); ?>
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