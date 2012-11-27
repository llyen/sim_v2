<?php
/* @var $this TariffsComponentsController */
/* @var $model TariffsComponents */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tariffs-components-form',
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
		<?php echo $form->labelEx($model,'type_id'); ?>
		<?php echo $form->textField($model,'type_id'); ?>
		<?php echo $form->error($model,'type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medium_id'); ?>
		<?php echo $form->textField($model,'medium_id'); ?>
		<?php echo $form->error($model,'medium_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unit'); ?>
		<?php echo $form->textField($model,'unit',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mandatory_date'); ?>
		<?php echo $form->textField($model,'mandatory_date'); ?>
		<?php echo $form->error($model,'mandatory_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_per_unit'); ?>
		<?php echo $form->textField($model,'price_per_unit',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'price_per_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vat'); ?>
		<?php echo $form->textField($model,'vat'); ?>
		<?php echo $form->error($model,'vat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'multiplier'); ?>
		<?php echo $form->textField($model,'multiplier',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'multiplier'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'archival'); ?>
		<?php echo $form->textField($model,'archival'); ?>
		<?php echo $form->error($model,'archival'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->