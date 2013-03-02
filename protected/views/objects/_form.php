<?php
/* @var $this ObjectsController */
/* @var $model Objects */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'objects-form',
	'enableAjaxValidation'=>true,
	'type'=>'horizontal',
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

<fieldset>
	<?php echo $form->errorSummary($model, 'Proszę poprawić następujące błędy:'); ?>
	<?php echo $form->dropDownListRow($model, 'unit_id', $units); ?>
	<?php echo $form->textFieldRow($model,'name',array('size'=>60,'maxlength'=>100)); ?>
	<?php echo $form->textFieldRow($model,'address',array('size'=>60,'maxlength'=>255)); ?>
	<?php echo $form->textFieldRow($model,'plot_number',array('size'=>60,'maxlength'=>255)); ?>
	<?php echo $form->fileFieldRow($model, 'energy_certificate'); ?>
	<?php echo $form->textFieldRow($model,'area',array('size'=>10,'maxlength'=>10)); ?>
	<?php echo $form->textFieldRow($model,'cubage',array('size'=>10,'maxlength'=>10)); ?>
	<?php echo $form->textAreaRow($model,'additional_information'); ?>
</fieldset>
<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>($model->isNewRecord ? 'Utwórz' : 'Zapisz'))); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->